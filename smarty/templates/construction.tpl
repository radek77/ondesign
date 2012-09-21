{extends "layout.tpl"}

{block "javascript"}

	<script type="text/javascript">

		$(document).ready(function()
		{
			$("img.rollover").hover(
				function()
				{
					this.src = this.src.replace("_off", "_on");
				},
				function()
				{
					this.src = this.src.replace("_on", "_off");
				});

		    $(document).bind('mousewheel DOMMouseScroll',function(){
		        stopWheel();
		    });

		});

		function stopWheel(e){
		    if(!e){ /* IE7, IE8, Chrome, Safari */
		        e = window.event;
		    }
		    if(e.preventDefault) { /* Chrome, Safari, Firefox */
		        e.preventDefault();
		    }
		    e.returnValue = false; /* IE7, IE8 */
		}

	</script>

{/block}

{block "css"}

	<style type="text/css">
		body {
		    min-width: 1152px;
		    margin: 0;
		    padding: 0;
		    background-position: top center;
		    background-color: #efefef;
				overflow: hidden;
		}

		#top-text {
		    text-align: center;
		}

		#left-side-outer {
		    width:50%;
		    float: left;
		    margin-right: -576px;
		    height: 305px;
		}

		#left-side {
		    margin-right: 576px;
		    background-color: #efefef;
		    height: 305px;
		    text-align: center;
		}

		#center-column {
		    width: 1152px;
		    float: left;
		    color: #000000;
		    background-color: #fff;
		    position: relative;
		    z-index: 10;
		    height: 305px;
		    text-align: center;
		}

		#right-side-outer {
		    width: 50%;
		    float: right;
		    margin-left: -576px;
		    height: 305px;
		}

		#right-side {

		    margin-left: 576px;
		    height: 305px;
		    background-color: #efefef;
		    text-align: center;
		}

		#header{
		    clear: both;
		    height: 80px;
		    text-align: center;
		    background-color: #fff;
		}

		#footer{
		    clear: both;
		    height: 100%;
		    text-align: center;
		    background-color: #fff;
		}
	</style>

{/block}

{block "body"}

	<div id="left-side-outer">
		<div id="left-side"></div>
	</div>

	<div id="center-column">

		<div id="header"></div>

		<table cellpadding="0" border="0" cellspacing="0">
			<tr>
				<td><img src="{$images_path}slice_0_0.png" style="width: 478px; height: 635px; border-width: 0px;"></td>
				<td><img src="{$images_path}slice_0_1.png" style="width: 137px; height: 635px; border-width: 0px;"></td>
				<td><img src="{$images_path}slice_0_2.png" style="width: 537px; height: 635px; border-width: 0px;"></td>
			</tr>

			<tr>
				<td style="height: 33px;"><img src="{$images_path}slice_1_0.png" style="width: 478px; height: 33px; border-width: 0px;"></td>
				<td style="height: 33px;"><a href="mailto:{$email_address_marek}"><img class="rollover" src="{$images_path}slice_1_1_off.png" style="width: 137px; height: 33px; border-width: 0px;"></a></td>
				<td style="height: 33px;"><img src="{$images_path}slice_1_2.png" style="width: 537px; height: 33px; border-width: 0px;"></td>
			</tr>

			<tr>
				<td><img src="{$images_path}slice_2_0.png" style="width: 478px; height: 147px; border-width: 0px;"></td>
				<td><img src="{$images_path}slice_2_1.png" style="width: 137px; height: 147px; border-width: 0px;"></td>
				<td><img src="{$images_path}slice_2_2.png" style="width: 537px; height: 147px; border-width: 0px;"></td>
			</tr>
		</table>

    <div id="footer"></div>

	</div>

	<div id="right-side-outer">
		<div id="right-side"></div>
	</div>

{/block}