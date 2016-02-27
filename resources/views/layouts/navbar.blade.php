<!--Barra de navegacion-->
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">ComicOn</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!--la clase activa te marca el boton de la nav bar.-->
                <li class="active"><a href="/">Home</a></li>
                <!--Menu desplegable.-->
                <li class="dropdown">
                    <a href="404.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/comiclist.php">Comics</a></li>
                        <li><a href="404.php">Libros</a></li>
                        <li><a href="404.php">Otras</a></li>
                    </ul>
                </li>
                <li><a href="404.php">About</a></li>
                <li><a href="404.php">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!--
<ol class="breadcrumb">
    <li class="active">Home</li>
</ol>
-->
<div class="breadcrumb" id="ba_sup"></div>