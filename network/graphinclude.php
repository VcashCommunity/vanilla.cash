
<style type="text/css" media="screen">
        html, body, svg { width: 100%; height: 100%; margin: 0;}
    </style>
	
<script type="text/javascript" src="network/js/vivagraph.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">

  	document.body.onload = function()
	{
		//onload();
  	}

	$(document).ready(function()
	{
		onload();
	});

	var graph =  Viva.Graph.graph();

	var selected;

	function onload ()
	{
		var layout = Viva.Graph.Layout.forceDirected(graph, {
           springLength : 60,
           springCoeff : 0.0008,
           dragCoeff : 0.02,
           gravity : -0.01
       	});

		var graphics = Viva.Graph.View.svgGraphics(), nodeSize = 24;
 
		var renderer = Viva.Graph.View.renderer(graph, {
			container : document.getElementById("graph"),
			graphics : graphics,
			layout : layout
		});
		renderer.run();
		
		$("#nodedesc").html("");

		$.getJSON("network/peers.json", null, function (result)
		{
			handleJson(result);
    		});
			
        }

		function handleJson(json)
		{
			var selected;

			for (var i in json.peers)
			{
				var peers = json.peers[i];

				var peer = { };

				for (var key in peers)
				{
					var value = peers[key];
					peer[key] = value;
					
				}

				handlePeer(peer);
			}
		}

		function handlePeer(peer)
		{
			console.log(JSON.stringify(peer.endpoint));
			console.log(JSON.stringify(peer.version));
					
			if (graph.getNode(peer.endpoint) == null)
			{
				if (peer)
				{
					graph.addNode(peer.endpoint, peer);

					graph.getNode(peer.endpoint).ui.attr('fill','#333333');
				}

				graph.getNode(peer.endpoint).ui.onmouseover = function(e)
				{
					if (selected)
					{
						selected.ui.attr('fill','#333333');
					}
	
					if (peer)
					{
						graph.getNode(peer.endpoint).ui.attr('fill','#99CC33');
					}
	
					$("#nodedesc").html("<ul><li>Protocol: " +
						peer.protocol + "</li>" + "<li>Version: " + peer.version + "</li></ul>"
					);
	
					if (peer)
					{
						selected = graph.getNode(peer.endpoint);
					}
				};
	
				graph.getNode(peer.endpoint).ui.onmouseout = function(e)
				{
					if (selected)
					{
						selected.ui.attr('fill','#333333');
						selected = null;
					}
					$("#nodedesc").html("");
				};
			}
		}

    </script>
  </body>
</html>