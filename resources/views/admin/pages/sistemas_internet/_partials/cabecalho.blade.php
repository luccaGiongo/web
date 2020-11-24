
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Drop-Down Navigation: Touch-Friendly and Responsive demo by Osvaldas Valutis</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Demo of Drop-Down Navigation: Touch-Friendly and Responsive" />
	<meta name="robots" content="all">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="canonical" href="/examples/drop-down-navigation-touch-friendly-and-responsive">
	<link rel="icon" href="../favicon.ico" />
	<link rel="stylesheet" href="../main.css" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400">
	<style>


				/* second level */
                
				#nav li ul
				{
                    /* background-color: hsl(145, 31%, 33%); */
                    background-image: radial-gradient(ellipse at center,#17882c 1%,#00510f 100%);
					display: none;
					position: absolute;
					top: 100%;
				}
                #nav li:hover ul
					{
						display: block;
						left: 0;
						right: 0;
					}
						#nav li:not( :first-child ):hover ul
						{
							left: -1px;
						}
						#nav li ul a
						{
							font-size: 1em; /* 20 */
                            border-top: 1px solid hsl(145, 31%, 33%);
                            color:white;
							padding: 0.75em; /* 15 (20) */
						}
							#nav li ul li a:hover,
							#nav li ul:not( :hover ) li.active a
							{
								background-color: hsl(145, 31%, 33%);
							}
                            

                            @media only screen and ( max-width: 62.5em ) /* 1000 */
		{
          
		}



			/* first level */

				}
		}

		

        </style>
</head>

<body>

<script src="../main.js"></script>
<script>var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-7572727-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();</script>             
<nav class="navbar navbar-expand-md navbar-dark fixed-top site_iffar" id="nav" role="navigation">
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <a class="navbar-brand" href="{{ route('products.index')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <ul class="navbar-nav clearfix mr-auto">
        {{-- <li>
                <a href="?blog" aria-haspopup="true"><span><i>Templates</i> </span></a>
                <ul>
                    <li><a href="?design">1° Semestre</a></li>
                    <li><a href="?html">2° Semestre</a></li>
                    <li><a href="?html">3° Semestre</a></li>
                    <li><a href="?html">4° Semestre</a></li>
                    <li><a href="?html">5° Semestre</a></li>
                    <li><a href="?html">6° Semestre</a></li>
                    
                </ul>
            </li> --}}
            {{-- <li>

                <a class="nav-link" href="#">Docentes</a>
            </li> --}}
            {{-- <li>

                <a class="nav-link" href="#">Perfil do Egresso</a>
            </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">PPC</a>
                </li> --}}
                <li>

                    <a class="nav-link" href="#">Projetos</a>
                </li>
                <li>

                    <a class="nav-link" href="#">Fotos</a>
                </li>
                {{-- <li>

                    <a class="nav-link" href="#">Administrar</a>
                </li> --}}
            </ul>
            {{-- <img src="svg/001-user.svg" alt="..." class=""> --}}
            <a href="">
                <picture>
                    <source srcset="svg/_login.png" type="image/svg+xml">
                        <img src="svg/_login.png" class="img-fluid" width="60" alt="Login">
                    </picture>
            </a>​
        </div>
    </nav>

