<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./css/Jquery.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="./js/bootstrap.min.js></script>
	
    <meta charset="utf-8">
	
    <title>MyGrundfos</title>
	
    <script type="text/javascript">
  $(function() {
      
      var availableTags = ["Alpha 1", "Alpha 2", "Alpha 3" ];
      
      $( "#userInput" ).autocomplete({ source: availableTags });
  });
  </script>
  </head>
  <body>
    <header>
      <section id="username">
        <img id="user_icon" src="./icons/user.svg" alt="User icon"> Niels Hansen
      </section>

      <section id="logo">
        <img id="logo" src="./icons/logo.svg" alt="Grundos logo">
      </section>
        <form id='Top_search'>
  <input type="text" name="search" placeholder="Search">
  <img src="./icons/search.svg">
</form>
    </header>

      <ul id="navigation">
        <li><a href="#">Products</a></li>
        <li><a href="#">Market Areas</a></li>
        <li><a href="#">Cases</a></li>
        <li><a href="#">Service & Support</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Where to buy</a></li>
      </ul>
      <aside>
        <p>Grundfos / MyGrundfos / Marketing Material</p>

        <h1>MyGrundfos</h1>
        <ul id="special_snowflake">
          <li>Dashboard</li>
        </ul>

        <h1>Tools</h1>
        <ul class="aside_navigation">
          <li><a href="#">Spare parts finder</a></li>
          <li><a href="#">Pump replacemen</a>t</li>
          <li><a href="#">Quotations</a></li>
          <li><a href="#">Order status</a></li>
          <li><a href="#">List price finder</a></li>
          <li><a href="#">Availability</a></li>
          <li id="active"><a href="#">Marketing material</a></li>
        </ul>
      </aside>
      <nav>
        <form id='Main_search' name='Main_search' onsubmit='redirect();return false;'>
          <h1 id="search_heading">Search for the material you need</h1>
            <input type='text' id='userInput' name='userInput' value=''>
            <input id='submitbutton' type='submit' name='submit' value='Search'>
        </form>

        <script type='text/javascript'>
        function redirect() {
           var input = document.getElementById('userInput').value.toLowerCase();
            switch(input) {
                case 'alpha 1':
                    window.location.replace('https://www.pornhub.com/');
                    break;
                case 'alpha 2':
                    window.location.replace('https://www.facebook.com/messages/t/der.kaiser.A.M');
                    break;

                    case 'alpha 3':
                        window.location.replace('https://www.youtube.com/');
                        break;
                default:
                    window.location.replace('http://localhost/Grundfos/');
                    break;
            }


        }
        </script>
      </nav>
      <main>
        <h1 id="orders">My orders</h1>
        <ul id="order_list">
          <li><a href='#'>Alpha 1</a></li>
          <li><a href='#'>Alpha 2</a></li>
          <li><a href='#'>Alpha 3</a></li>
          <li><a href='#'>Alpha 4</a></li>
        </ul>
      </main>
      <nav>
        <h1 id='updates'>Recent updates</h1>
        <ul id="update_list">
          <li><a href='#'><img src='./icons/download.png'>Alpha 1 / mp4 video</a></li>
          <li><a href='#'><img src='./icons/download.png'>Alpha 2 / mp4 video</a></li>
          <li><a href='#'><img src='./icons/download.png'>Alpha 3 / mp4 video</a></li>
          <li><a href='#'><img src='./icons/download.png'>Alpha 4 / mp4 video</a></li>
        </ul>
      </nav>
      <script type="text/javascript">
    $(function() {

        var availableTags = ["Alpha 1", "Alpha 2", "Alpha 3" ];
   
        $( "#userInput" ).autocomplete({ source: availableTags });
    });
</script>
  </body>
</html>
