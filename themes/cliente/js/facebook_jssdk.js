window.fbAsyncInit = function() {
    FB.init({
      appId      : '327884637252273', // App ID
      channelUrl : '//http://altiviaot.webcindario.com/', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
	  //oauth      : true,
    });

    // Additional initialization code here
	//FB.ui({ method: 'feed', 
             //message: 'Facebook for Websites is super-cool'});
};

  // Load the SDK Asynchronously
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=327884637252273";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));