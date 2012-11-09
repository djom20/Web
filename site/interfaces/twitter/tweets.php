<div class="sidebar3">
	<div class="head">&nbsp;</div>
	<div class="cabecera"><b>&nbsp;&nbsp;Tweets</b></div>
	<div class="conten" style="padding:15px 0px 0px 55px;">
		<p style="font: message-box; margin: 0px 0px;">
			<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'profile',
			  rpp: 10,
			  interval: 30000,
			  width: 350,
			  height: 300,
			  theme: {
			    shell: {
			      background: '#333333',
			      color: '#ffffff'
			    },
			    tweets: {
			      background: '#000000',
			      color: '#ffffff',
			      links: '#07c9eb'
			    }
			  },
			  features: {
			    scrollbar: true,
			    loop: false,
			    live: true,
			    behavior: 'all'
			  }
			}).render().setUser('djom20').start();
			</script>
		</p>
		<div class="section-separator"></div>
	</div>
	<div class="foter">&nbsp;</div>
</div><!-- end .sidebar3 -->