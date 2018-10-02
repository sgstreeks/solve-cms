@extends('navft')

@section('title', '| Navigation')

@section('content')

<style>

        @font-face {
            font-family: 'FontAwesome2';
            src: url('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff') format('woff'),
          url('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
          }

          .fa {
            display: inline-block;
            font-family: FontAwesome2 !important;
            font-style: normal;
            font-weight: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
          }

          * {
            box-sizing: border-box;
          }

          body {
            background: #f0f0f0;
          }

          .content {
            width: 260px;
            margin: 20px auto;
          }

          #demo-list a {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 100%;
          }

          .jquery-accordion-menu, .jquery-accordion-menu * {
            font-family: 'Open Sans', sans-serif;
            box-sizing: border-box;
            outline: 0;
          }

          .jquery-accordion-menu {
            min-width: 260px;
            float: left;
            position: relative;
            box-shadow: 0 20px 50px #333;
          }

          .jquery-accordion-menu .jquery-accordion-menu-footer, .jquery-accordion-menu .jquery-accordion-menu-header {
            width: 100%;
            height: 50px;
            padding-left: 22px;
            float: left;
            line-height: 50px;
            font-weight: 600;
            color: #f0f0f0;
            background: #414956;
          }

          .jquery-accordion-menu ul {
            margin: 0;
            padding: 0;
            list-style: none;
          }

          .jquery-accordion-menu ul li {
            width: 100%;
            display: block;
            float: left;
            position: relative;
          }

          .jquery-accordion-menu ul li a {
            width: 100%;
            padding: 14px 22px;
            float: left;
            text-decoration: none;
            color: #f0f0f0;
            font-size: 13px;
            background: #414956;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
            transition: color .2s linear, background .2s linear;
          }

          .jquery-accordion-menu>ul>li.active, .jquery-accordion-menu>ul>li:hover>a {
            color: #fff;
            background: ##3333FF;
          }

          .jquery-accordion-menu>ul>li>a {
            border-bottom: solid 1px ##3333FF;
          }

          .jquery-accordion-menu ul li a i {
            width: 34px;
            float: left;
            line-height: 18px;
            font-size: 16px;
            text-align: left;
          }

          .jquery-accordion-menu .submenu-indicator {
            float: right;
            right: 22px;
            position: absolute;
            line-height: 19px;
            font-size: 20px;
            transition: transform .3s linear;
          }

          .jquery-accordion-menu ul ul.submenu .submenu-indicator {
            line-height: 16px;
          }

          .jquery-accordion-menu .submenu-indicator-minus>.submenu-indicator {
            transform: rotate(45deg);
          }

          .jquery-accordion-menu ul ul.submenu, .jquery-accordion-menu ul ul.submenu li ul.submenu {
            width: 100%;
            display: none;
            position: static;
          }

          .jquery-accordion-menu ul ul.submenu li {
            clear:both;
            width: 100%;
          }

          .jquery-accordion-menu ul ul.submenu li a {
            width: 100%;
            float: left;
            font-size: 11px;
            background: #383838;
            border-top: none;
            position: relative;
            border-left: solid 6px transparent;
            transition: border .2s linear;
          }

          .jquery-accordion-menu ul ul.submenu li:hover>a {
            border-left-color: #414956;
          }

          .jquery-accordion-menu ul ul.submenu>li>a {
            padding-left: 30px;
          }

          .jquery-accordion-menu ul ul.submenu>li>ul.submenu>li>a {
            padding-left: 45px;
          }

          .jquery-accordion-menu ul ul.submenu>li>ul.submenu>li>ul.submenu>li>a {
            padding-left: 60px;
          }

          .jquery-accordion-menu ul li .jquery-accordion-menu-label, .jquery-accordion-menu ul ul.submenu li .jquery-accordion-menu-label {
            min-width: 20px;
            padding: 1px 2px 1px 1px;
            position: absolute;
            right: 18px;
            top: 14px;
            font-size: 11px;
            font-weight: 800;
            color: #555;
            text-align: center;
            line-height: 18px;
            background: #f0f0f0;
            border-radius: 100%;
          }

          .jquery-accordion-menu ul ul.submenu li .jquery-accordion-menu-label {
            top: 12px;
          }

          .ink {
            display: block;
            position: absolute;
            background: rgba(255,255,255,.3);
            border-radius: 100%;
            transform: scale(0);
          }

          .animate-ink {
            animation: ripple .5s linear;
          }

          @keyframes ripple {
            100% {
              opacity: 0;
              transform: scale(2.5);
            }
          }

          .red.jquery-accordion-menu .jquery-accordion-menu-footer,.red.jquery-accordion-menu .jquery-accordion-menu-header,.red.jquery-accordion-menu ul li a {
            background-image: linear-gradient( 122deg, #633991 0%, #c1156c 100%);
          }

          .red.jquery-accordion-menu>ul>li.active>a,.red.jquery-accordion-menu>ul>li:hover>a {
            background-image: linear-gradient( 122deg, #633991 0%, #c1156c 50%);
          }

          .red.jquery-accordion-menu>ul>li>a {
              border-bottom-color: #c1156c
          }

          .red.jquery-accordion-menu ul ul.submenu li:hover>a {
              border-left-color: #c1156c
          }

</style>

<script>



</script>

<h1><center><font face="Helvetica Neue" color="#5555">NAVIGATION</font></center></h1>


        <body>
                <div class="content">
                        <div id="jquery-accordion-menu" class="jquery-accordion-menu red">
                          <div class="jquery-accordion-menu-header" id="form"></div>
                          <ul id="demo-list">
                             <li class="active"><a href="/"><i class="fa fa-home"></i>Home </a></li>
                            <li><a href="/"><i class="fa fa-cog"></i>JEE </a>
                              <ul class="submenu">
                                <li><a href="#">PHYSICS TOPIC TEST</a>
                                  <ul class="submenu">
                                    <li><a href="#">Physics and measurement </a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy01tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy01tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy01tt02.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Kinematics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy02tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy02tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy02tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Thermodynamics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy03tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy03tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy03tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Work, energy and power</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy04tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy04tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy04tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Rotational motion</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy05tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy05tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy05tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Gravitation</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy06tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy06tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy06tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Laws of motion</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy07tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy07tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy07tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Properties of solids and liquids</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy08tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy08tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy08tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Electronic devices</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy09tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy09tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy09tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Kinetic theory of gases</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy10tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy10tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy10tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Oscillations and waves</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy11tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy11tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy11tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Communication systems</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy12tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy12tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy12tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Current electricity</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy13tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy13tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy13tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Magnetic effects of current and magnetism</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy14tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy14tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy14tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Electromagnetic induction and alternating currents</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy15tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy15tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy15tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Electromagnetic waves</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy16tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy16tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy16tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Optics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy17tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy17tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy17tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Dual nature of matter and radiation</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy18tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy18tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy18tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Electrostatics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy19tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy19tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy19tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Atoms and nuclei</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeephy20tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeephy20tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeephy20tt03.index') }}">Test 3</a></li>
                      </ul></li>


                                  </ul>
                                </li>
                                <li><a href="#">CHEMISTRY TOPIC TEST</a>
                                  <ul class="submenu">
                                    <li><a href="#">Some basic concepts in chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem01tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem01tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem01tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">States of matter</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem02tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem02tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem02tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Atomic structure</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem03tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem03tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem03tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Chemical bonding and molecular structure</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem04tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem04tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem04tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Chemical thermodynamics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem05tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem05tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem05tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Solutions</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem06tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem06tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem06tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Equilibrium</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem07tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem07tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem07tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Redox reactions and electrochemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem08tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem08tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem08tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Chemical kinetics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem09tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem09tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem09tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Surface chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem10tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem10tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem10tt03.index') }}">Test 3</a></li>
                      </ul></li>



                      <li><a href="#">Purification and characterisation of organic compounds</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem11tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem11tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem11tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Hydrocarbons</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem12tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem12tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem12tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Chemistry in everyday life</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem13tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem13tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem13tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Principles related to practical chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem14tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem14tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem14tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Organic compounds containing halogens</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem15tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem15tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem15tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Organic compounds containing oxygen</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem16tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem16tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem16tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Organic compounds containing nitrogen</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem17tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem17tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem17tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Polymers</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem18tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem18tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem18tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Some basic principles of organic chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem19tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem19tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem19tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Biomolecules</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem20tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem20tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem20tt03.index') }}">Test 3</a></li>
                      </ul></li>



                      <li><a href="#">Classification of elements and periodicity in properties</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem21tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem21tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem21tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Hydrogen</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem22tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem22tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem22tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Block elements (alkali and alkaline earth metals)</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem23tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem23tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem23tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">P Block elements group 13 to group 18 elements</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem24tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem24tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem24tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">d- and f - block elements</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem25tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem25tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem25tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Co-ordination compounds</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem26tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem26tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem26tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Environmental chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem27tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem27tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem27tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">General principles and processes of isolation of metals</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeechem28tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeechem28tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeechem28tt03.index') }}">Test 3</a></li>
                      </ul></li>


                                  </ul>
                                </li>
                                <li><a href="#">MATHS TOPIC TEST</a>
                                  <ul class="submenu">

                      <li><a href="#">Sets, relations and functions</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat01tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat01tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat01tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Complex numbers and quadratic equations</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat02tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat02tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat02tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Matrices and determinants</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat03tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat03tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat03tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Mathematical reasoning</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat04tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat04tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat04tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Mathematical induction</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat05tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat05tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat05tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Permutations and combinations</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat06tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat06tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat06tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Sequences and series</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat07tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat07tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat07tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Limit, continuity and differentiability</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat08tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat08tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat08tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Integral calculus</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat09tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat09tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat09tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Differential equations</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat10tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat10tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat10tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Binomial theorem and its simple applications</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat11tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat11tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat11tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Three-dimensional geometry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat12tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat12tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat12tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Vector algebra</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat13tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat13tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat13tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Co-ordinate geometry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat14tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat14tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat14tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Statistics and probability</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat15tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat15tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat15tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Trigonometry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jeemat16tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jeemat16tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jeemat16tt03.index') }}">Test 3</a></li>
                      </ul></li>
                                  </ul>
                                  <li><a href="#">FULL TEST</a>
                                  <ul class="submenu">
                                    <li><a href="{{ route('jee18ft01.index') }}">FULL TEST 1</a></li>
                                    <li><a href="{{ route('jee18ft02.index') }}">FULL TEST 2</a></li>
                                    <li><a href="{{ route('jee18ft03.index') }}">FULL TEST 3</a></li>
                                    <li><a href="{{ route('jee18ft04.index') }}">FULL TEST 4</a></li>
                                    <li><a href="{{ route('jee18ft05.index') }}">FULL TEST 5</a></li>
                                    <li><a href="{{ route('jee18ft06.index') }}">FULL TEST 6</a></li>
                                  </ul>
                                </li>
                                <li><a href="#">DEMO TEST</a>
                                  <ul class="submenu">
                                    <li><a href="{{ route('jee18demo01.index') }}">DEMO TEST 1</a></li>
                                    <li><a href="{{ route('jee18demo01.index') }}">DEMO TEST 2</a></li>

                                  </ul>
                                </li>
                              </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-cog"></i>NEET </a>
                              <ul class="submenu">
                                <li><a href="#">PHYSICS</a>
                                  <ul class="submenu">
                                    <li><a href="#">Physics and measurement </a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy01tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy01tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy01tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Kinematics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy02tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy02tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy02tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Thermodynamics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy03tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy03tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy03tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Work, energy and power</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy04tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy04tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy04tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Rotational motion</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy05tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy05tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy05tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Gravitation</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy06tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy06tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy06tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Laws of motion</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy07tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy07tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy07tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Properties of solids and liquids</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy08tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy08tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy08tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Electronic devices</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy09tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy09tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy09tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Kinetic theory of gases</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy10tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy10tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy10tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Oscillations and waves</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy11tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy11tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy11tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Current electricity</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy12tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy12tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy12tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Magnetic effects of current and magnetism</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy13tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy13tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy13tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Electromagnetic induction and alternating currents</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy14tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy14tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy14tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Electromagnetic waves</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy15tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy15tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy15tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Optics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy16tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy16tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy16tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Dual nature of matter and radiation</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy17tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy17tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy17tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Electrostatics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy18tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy18tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy18tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Atoms and nuclei</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetphy19tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetphy19tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetphy19tt03.index') }}">Test 3</a></li>
                      </ul></li>
                                  </ul>
                                </li>
                                <li><a href="#">CHEMISTRY</a>
                                  <ul class="submenu">
                                    <li><a href="#">Some basic concepts in chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem01tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem01tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem01tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">States of matter</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem02tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem02tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem02tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Atomic structure</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem03tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem03tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem03tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Chemical bonding and molecular structure</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem04tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem04tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem04tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Chemical thermodynamics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem05tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem05tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem05tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Solutions</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem06tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem06tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem06tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Equilibrium</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem07tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem07tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem07tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Redox reactions and electrochemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem08tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem08tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem08tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Chemical kinetics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem09tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem09tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem09tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Surface chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem10tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem10tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem10tt03.index') }}">Test 3</a></li>
                      </ul></li>



                      <li><a href="#">Purification and characterisation of organic compounds</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem11tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem11tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem11tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Hydrocarbons</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem12tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem12tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem12tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Chemistry in everyday life</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem13tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem13tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem13tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Principles related to practical chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem14tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem14tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem14tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Organic compounds containing halogens</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem15tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem15tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem15tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Organic compounds containing oxygen</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem16tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem16tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem16tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Organic compounds containing nitrogen</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem17tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem17tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem17tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Polymers</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem18tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem18tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem18tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Some basic principles of organic chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem19tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem19tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem19tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Biomolecules</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem20tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem20tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem20tt03.index') }}">Test 3</a></li>
                      </ul></li>



                      <li><a href="#">Classification of elements and periodicity in properties</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem21tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem21tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem21tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Hydrogen</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem22tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem22tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem22tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Block elements (alkali and alkaline earth metals)</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem23tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem23tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem23tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">P Block elements group 13 to group 18 elements</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem24tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem24tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem24tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">d- and f - block elements</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem25tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem25tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem25tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Co-ordination compounds</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem26tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem26tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem26tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Environmental chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem27tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem27tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem27tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">General principles and processes of isolation of metals</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem28tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem28tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem28tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Alcohols, Phenols and Ethers</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetchem29tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetchem29tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetchem29tt03.index') }}">Test 3</a></li>
                      </ul></li>

                                  </ul>
                                </li>
                                <li><a href="#">BIOLOGY</a>
                                  <ul class="submenu">

                      <li><a href="#">Diversity in Living World</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetbio01tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetbio01tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetbio01tt03.index') }}">Test 3</a></li>
                      </ul></li>
                      <li><a href="#">Reproduction</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetbio02tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetbio02tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetbio02tt03.index') }}">Test 3</a></li>
                      </ul></li>
                      <li><a href="#">Structural Organization in Animals and Plant</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetbio03tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetbio03tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetbio03tt03.index') }}">Test 3</a></li>
                      </ul></li>
                      <li><a href="#">Genetics and Evolution</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetbio04tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetbio04tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetbio04tt03.index') }}">Test 3</a></li>
                      </ul></li>
                      <li><a href="#">Cell Structure and Function</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetbio05tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetbio05tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetbio05tt03.index') }}">Test 3</a></li>
                      </ul></li>
                      <li><a href="#">Biology and Human Welfare</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetbio06tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetbio06tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetbio06tt03.index') }}">Test 3</a></li>
                      </ul></li>
                      <li><a href="#">Plant Physiology</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetbio07tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetbio07tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetbio07tt03.index') }}">Test 3</a></li>
                      </ul></li>
                      <li><a href="#">Biotechnology and its Applications</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetbio08tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetbio08tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetbio08tt03.index') }}">Test 3</a></li>
                      </ul></li>
                      <li><a href="#">Human Physiology</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetbio09tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetbio09tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetbio09tt03.index') }}">Test 3</a></li>
                      </ul></li><li>
                      <li><a href="#">Ecology and Environment</a>
                      <ul class="submenu">
                      <li><a href="{{ route('neetbio10tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('neetbio10tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('neetbio10tt03.index') }}">Test 3</a></li>
                      </ul></li>
                                  </ul>
                                </li>
                                  <li><a href="#">FULL TEST</a>
                                     <ul class="submenu">
                                    <li><a href="{{ route('neet18ft01.index') }}">FULL TEST 1</a></li>
                                    <li><a href="{{ route('neet18ft02.index') }}">FULL TEST 2</a></li>
                                    <li><a href="{{ route('neet18ft03.index') }}">FULL TEST 3</a></li>
                                    <li><a href="{{ route('neet18ft04.index') }}">FULL TEST 4</a></li>
                                    <li><a href="{{ route('neet18ft05.index') }}">FULL TEST 5</a></li>
                                    <li><a href="{{ route('neet18ft06.index') }}">FULL TEST 6</a></li>
                                  </ul>
                                </li>
                                    <li><a href="#">DEMO TEST</a>
                                       <ul class="submenu">
                                    <li><a href="{{ route('neet18demo01.index') }}">DEMO TEST 1</a></li>
                                    <li><a href="{{ route('neet18demo02.index') }}">DEMO TEST 2</a></li>
                                  </ul>
                                </li>
                                </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-cog"></i>JIPMER </a>
                              <ul class="submenu">
                                <li><a href="#">PHYSICS</a>
                                  <ul class="submenu">
                                   <li><a href="#">Thermodynamics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipphy01tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipphy01tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipphy01tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Optics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipphy02tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipphy02tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipphy02tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Atoms & Nuclei</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipphy03tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipphy03tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipphy03tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Dual Matter of Nature</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipphy04tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipphy04tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipphy04tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Electromagnetic Induction & Alternating Current</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipphy05tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipphy05tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipphy05tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Current Electricity</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipphy06tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipphy06tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipphy06tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Electromagnetic Waves</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipphy07tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipphy07tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipphy07tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Electrostatics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipphy08tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipphy08tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipphy08tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Electronic Devices</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipphy09tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipphy09tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipphy09tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Magnetic Effect of Current & Magnetism</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipphy10tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipphy10tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipphy10tt03.index') }}">Test 3</a></li>
                      </ul></li>


                                  </ul>
                                </li>
                                <li><a href="#">CHEMISTRY</a>
                                  <ul class="submenu">

                      <li><a href="#">Surface Chemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem01tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem01tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem01tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Biomolecules</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem02tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem02tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem02tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Electrochemistry</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem03tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem03tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem03tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Alcohols</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem04tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem04tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem04tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Aldehydes</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem05tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem05tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem05tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Ketones and Carboxylic Acid</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem06tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem06tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem06tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Phenols & Ethers</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem07tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem07tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem07tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">D & F Block Elements</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem08tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem08tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem08tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">P Block Elements</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem09tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem09tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem09tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Halo Alkanes and Haloarenes</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem10tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem10tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem10tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Solutions</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem11tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem11tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem11tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Solid State</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem12tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem12tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem12tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Polymers</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem13tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem13tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem13tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Organic Compounds containing Nitrogen</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem14tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem14tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem14tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Chemistry in Everyday Life</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem15tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem15tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem15tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Chemical Kinetics</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem16tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem16tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem16tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Coordination Compounds</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem17tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem17tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem17tt03.index') }}">Test 3</a></li>
                      </ul></li>


                      <li><a href="#">Isolation of Elements</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipchem18tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipchem18tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipchem18tt03.index') }}">Test 3</a></li>
                      </ul></li>

                                  </ul>
                                </li>
                                <li><a href="#">BIOLOGY</a>
                                <ul class="submenu">

                      <li><a href="#">Cell Structure and Function</a>
                      <ul class="submenu">
                      <li><a href="#">Test 1</a></li>
                      <li><a href="{{ route('jipbio01tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipbio01tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Structural Organization in Plants and Animals</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipbio02tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipbio02tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipbio02tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Human Physiology</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipbio03tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipbio03tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipbio03tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Biotechnology</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipbio04tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipbio04tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipbio04tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Diversity in Living Organisms</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipbio05tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipbio05tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipbio05tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Genetics and Evolution</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipbio06tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipbio06tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipbio06tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Biology and Human Warfare</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipbio07tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipbio07tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipbio07tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Plant Physiology</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipbio08tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipbio08tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipbio08tt03.index') }}">Test 3</a></li>
                      </ul></li>

                      <li><a href="#">Ecology and Environment</a>
                      <ul class="submenu">
                      <li><a href="{{ route('jipbio09tt01.index') }}">Test 1</a></li>
                      <li><a href="{{ route('jipbio09tt02.index') }}">Test 2</a></li>
                      <li><a href="{{ route('jipbio09tt03.index') }}">Test 3</a></li>
                      </ul></li>
                                  </ul><li>
                                <li><a href="#">ENGLISH</a>
                                <ul class="submenu">

                      <li><a href="{{ route('jipengtt01.index') }}">ENGLISH TEST 1</a></li>
                      <li><a href="{{ route('jipengtt02.index') }}">ENGLISH TEST 2</a></li>
                      <li><a href="{{ route('jipengtt03.index') }}">ENGLISH TEST 3</a></li>
                      <li><a href="{{ route('jipengtt04.index') }}">ENGLISH TEST 4</a></li>
                      <li><a href="{{ route('jipengtt05.index') }}">ENGLISH TEST 5</a></li>

                                  </ul>
                                <li>
                                <li><a href="#">LOGICAL REASONING</a>
                                <ul class="submenu">

                      <li><a href="{{ route('jiplartt01.index') }}">LOGICAL TEST 1</a></li>
                      <li><a href="{{ route('jiplartt02.index') }}">LOGICAL TEST 2</a></li>
                      <li><a href="{{ route('jiplartt03.index') }}">LOGICAL TEST 3</a></li>
                      <li><a href="{{ route('jiplartt04.index') }}">LOGICAL TEST 4</a></li>
                      <li><a href="{{ route('jiplartt05.index') }}">LOGICAL TEST 5</a></li>

                                  </ul>
                                <li>
                                <li><a href="#">FULL TEST</a><ul class="submenu">

                      <li><a href="{{ route('jip18ft01.index') }}">FULL TEST 1</a></li>
                      <li><a href="{{ route('jip18ft02.index') }}">FULL TEST 2</a></li>
                      <li><a href="{{ route('jip18ft03.index') }}">FULL TEST 3</a></li>
                      <li><a href="{{ route('jip18ft04.index') }}">FULL TEST 4</a></li>
                      <li><a href="{{ route('jip18ft05.index') }}">FULL TEST 5</a></li>
                      <li><a href="{{ route('jip18ft06.index') }}">FULL TEST 6</a></li>
                                  </ul>
                                <li>
                                <li><a href="#">DEMO TEST</a><ul class="submenu">

                      <li><a href="{{ route('jip18demo01.index') }}">DEMO TEST 1</a></li>
                      <li><a href="{{ route('jip18demo02.index') }}">DEMO TEST 2</a></li>
                                  </ul>
                                <li>
                                  </ul>
                                </li>

                          </ul>
                                </div>
                        </div>
                      </div>
              </body>

              @section('scripts')



              <script type="text/javascript">
                ;(function($, window, document, undefined) {
                    var pluginName = "jqueryAccordionMenu";
                    var defaults = {
                      speed: 300,
                      showDelay: 0,
                      hideDelay: 0,
                      singleOpen: true,
                      clickEffect: true
                    };

                    function Plugin(element, options) {
                      this.element = element;
                      this.settings = $.extend({}, defaults, options);
                      this._defaults = defaults;
                      this._name = pluginName;
                      this.init();
                    }

                    $.extend(Plugin.prototype, {
                      init: function() {
                        this.openSubmenu();
                        this.submenuIndicators();
                        if (defaults.clickEffect) {
                          this.addClickEffect();
                        }
                      },
                      openSubmenu: function() {
                        $(this.element).children('ul').find('li').bind('click touchstart', function(e) {
                          e.stopPropagation();
                          e.preventDefault();
                          if ($(this).children('.submenu').length > 0) {
                            if ($(this).children('.submenu').css('display') == 'none') {
                              $(this).children('.submenu').delay(defaults.showDelay).slideDown(defaults.speed);
                              $(this).children('.submenu').siblings('a').addClass('submenu-indicator-minus');
                              if (defaults.singleOpen) {
                                $(this).siblings().children('.submenu').slideUp(defaults.speed);
                                $(this).siblings().children('.submenu').siblings('a').removeClass('submenu-indicator-minus');
                              }
                              return false;
                            } else {
                              $(this).children('.submenu').delay(defaults.hideDelay).slideUp(defaults.speed);
                            }

                            if ($(this).children('.submenu').siblings('a').hasClass('submenu-indicator-minus')) {
                              $(this).children('.submenu').siblings('a').removeClass('submenu-indicator-minus');
                            }
                          }
                          window.location.href = $(this).children('a').attr('href');
                        })
                      },
                      submenuIndicators: function() {
                        if ($(this.element).find('.submenu').length > 0) {
                          $(this.element).find('.submenu').siblings('a').append('<span class="submenu-indicator">+</span>');
                        }
                      },
                      addClickEffect: function() {
                        var ink, d, x, y;
                        $(this.element).find('a').bind('click touchstart', function(e) {
                          $('.ink').remove();
                          if ($(this).children('.ink').length === 0) {
                            $(this).prepend('<span class="ink"></span>');
                          }
                          ink = $(this).find('.ink');
                          ink.removeClass('animate-ink');
                          if (!ink.height() && !ink.width()) {
                            d = Math.max($(this).outerWidth(), $(this).outerHeight());
                            ink.css({
                              height: d,
                              width: d
                            });
                          }
                          x = e.pageX - $(this).offset().left - ink.width() / 2;
                          y = e.pageY - $(this).offset().top - ink.height() / 2;
                          ink.css({
                            top: y + 'px',
                            left: x + 'px'
                          }).addClass('animate-ink');
                        })
                      }
                    });
                    $.fn[pluginName] = function(options) {
                      this.each(function() {
                        if (!$.data(this, 'plugin_' + pluginName)) {
                          $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
                        }
                      });
                      return this;
                    }
                  })(jQuery, window, document);

                  jQuery('#jquery-accordion-menu').jqueryAccordionMenu();

              </script>

          @endsection




