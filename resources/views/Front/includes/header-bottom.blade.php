<div class="header-bottom hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="contentsticky_verticalmenu verticalmenu-main col-lg-3 col-md-1 d-flex" data-textshowmore="Show More" data-textless="Hide" data-desktop_item="4">
                <div class="toggle-nav d-flex align-items-center justify-content-start">
                    <span class="btnov-lines"></span>
                    <span>Shop By Categories</span>
                </div>
                <div class="verticalmenu-content has-showmore show">

                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novverticalmenu/views/templates/hook/novverticalmenu.tpl -->
                    <div id="_desktop_verticalmenu" class="nov-verticalmenu block" data-count_showmore="6">
                        <div class="box-content block_content">
                            <div id="verticalmenu" class="verticalmenu" role="navigation">
                                



                                @if(isset($main))
                                @if( $main -> count()>0)
                                @foreach($main as $index => $mains)
                               
                                
                                <ul class="menu level1"><li class="item  parent" ><a href="#" title="Laptops &amp; Accessories"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/laptop.png') no-repeat scroll center center;"></i>{{$main[$index]->name}}</a><span class="show-sub fa-active-sub"></span><span class="menu-sub-title"> </span><div class="dropdown-menu" style="width:222px"><ul>
                                    
                                    @foreach ($main[$index]->subcat as $jin => $do)
                                    <li class="item " >
                                    <a href="#" title="Macbook Pro">
                                    {{ $main[$index]->subcat[$jin ] -> name}}
                                </a>
                                    </li>
                                   @endforeach
                                    
                                  
                           
                                    
                                </ul></div></li>
                       
                            @endforeach
                                @endif
                                @endif
                               
                            </div>
                        </div>
                    </div>
                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novverticalmenu/views/templates/hook/novverticalmenu.tpl -->

                </div>
            </div>

            <div class="col-lg-9 col-md-11 header-menu d-flex align-items-center justify-content-start">
                <div class="header-menu-search d-flex justify-content-between w-100 align-items-center">

                    <div id="_desktop_top_menu">

                        <!-- begin modules/novmegamenu/views/templates/hook/novmegamenu.tpl -->
                        <nav id="nov-megamenu" class="clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div id="megamenu" class="nov-megamenu clearfix">

                             
                               

                                <ul class="menu level1"><li class="item home-page has-sub" ><span class="opener"></span><a href="?home" title="Home"><i class="zmdi zmdi-home"></i>admin panel</a><div class="dropdown-menu" style="width:200px"><ul class=""><li class="item " ><a href="{{route('adminLogin')}}" title="Homepage 1">admin panel</a></li>
                                              
                                            </ul></div></li>
                               
                                            @if(isset($main))
                                            @if( $main -> count()>0)
                                            @foreach($main as $index => $mains)

                                    <li class="item  group" ><span class="opener"></span><a href="http://demo.bestprestashoptheme.com/savemart/ar/2-????????????-????????????????" title="Categories"><i class="zmdi zmdi-group"></i>Categories</a><div class="dropdown-menu" ><ul class=""><li class="item container group" ><div class="dropdown-menu" ><ul class=""><li class="item col-lg-3 col-md-3 html" ><span class="menu-title">{{$main[$index]->name}}</span>

                                        @foreach ($main[$index]->subcat as $jin => $do)
                                                                        <li><a href="#" title="EliteBook">  {{ $main[$index]->subcat[$jin ] -> name}}</a></li>
                                                                        @endforeach 
                                                                    </ul></div></li>
                                                                  
                                                              
                            @endforeach
                                @endif
                                @endif
                                    
                                                
                        </nav>
                        <!-- end modules/novmegamenu/views/templates/hook/novmegamenu.tpl -->

                    </div>

                    <div class="advencesearch_header">
                        <span class="toggle-search hidden-lg-up"><i class="zmdi zmdi-search"></i></span>
                        <div id="_desktop_search" class="contentsticky_search">

                            <!-- begin modules/novadvancedsearch/novadvancedsearch-top.tpl -->
                            <!-- block seach mobile -->
                            <!-- Block search module TOP -->
                            <div id="desktop_search_content"
                                 data-id_lang="6"
                                 data-ajaxsearch="1"
                                 data-novadvancedsearch_type="top"
                                 data-instantsearch=""
                                 data-search_ssl=""
                                 data-link_search_ssl="http://demo.bestprestashoptheme.com/savemart/ar/??????"
                                 data-action="http://demo.bestprestashoptheme.com/savemart/ar/module/novadvancedsearch/result">
                                <form method="get" action="http://demo.bestprestashoptheme.com/savemart/ar/module/novadvancedsearch/result" id="searchbox" class="form-novadvancedsearch">
                                    <input type="hidden" name="fc" value="module">
                                    <input type="hidden" name="module" value="novadvancedsearch">
                                    <input type="hidden" name="controller" value="result">
                                    <input type="hidden" name="orderby" value="position" />
                                    <input type="hidden" name="orderway" value="desc" />
                                    <input type="hidden" name="id_category" class="id_category" value="0" />
                                    <div class="input-group">
                                        <input type="text" id="search_query_top" class="search_query ui-autocomplete-input form-control" name="search_query" value="" placeholder="Search"/>

                                        <div class="input-group-btn nov_category_tree hidden-sm-down">
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" value="" aria-expanded="false">
                                                CATEGORIES
                                            </button>
                                            <ul class="dropdown-menu list-unstyled">
                                                <li class="dropdown-item active" data-value="0"><span>All Categories</span></li>
                                                <li class="dropdown-item " data-value="2"><span>???????????? ????????????????</span></li>
                                                <ul class="list-unstyled pl-5">
                                                    <li class="dropdown-item" data-value="3" >
                                                        <span>Computer &amp; Networking</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="10" >
                                                        <span>-- USB</span>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-item" data-value="11" >
                                                                <span>---- USB Kingston</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="12" >
                                                                <span>---- USB Sandisk</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="13" >
                                                                <span>---- USB Samsung</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item" data-value="14" >
                                                        <span>-- Hard Disk</span>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-item" data-value="19" >
                                                                <span>---- Hard Disk Drive</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="20" >
                                                                <span>---- Solid State Drives</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="21" >
                                                                <span>---- SATA</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item" data-value="15" >
                                                        <span>-- Modem WIFI</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="16" >
                                                        <span>-- Keyboard</span>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-item" data-value="22" >
                                                                <span>---- Keyboard 1</span>
                                                            </li>
                                                            <li class="dropdown-item" data-value="23" >
                                                                <span>---- Keyboard 2</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-item" data-value="17" >
                                                        <span>-- Mouse</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="18" >
                                                        <span>-- Monitor</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="6" >
                                                        <span>Laptop &amp; Accessories</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="7" >
                                                        <span>-- Laptop 1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="8" >
                                                        <span>-- Laptop 2</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="9" >
                                                        <span>Smartphone &amp; Tablet</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="24" >
                                                        <span>-- Apple</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="25" >
                                                        <span>-- Samsung</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="26" >
                                                        <span>-- Motorola</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="27" >
                                                        <span>-- Chargers</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="4" >
                                                        <span>Home Appliance</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="5" >
                                                        <span>Camera &amp; Photo</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="28" >
                                                        <span>-- Camera 1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="29" >
                                                        <span>-- Camera 2</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="30" >
                                                        <span>-- Photo 1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="31" >
                                                        <span>-- Photo 2</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="32" >
                                                        <span>Audio</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="33" >
                                                        <span>-- Headphone</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="34" >
                                                        <span>-- Wireless Speaker</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="35" >
                                                        <span>-- Bluetooth Speaker</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="36" >
                                                        <span>-- Mini Speaker</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="37" >
                                                        <span>-- Sound Card</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="38" >
                                                        <span>-- ??????????????????</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="39" >
                                                        <span>-- Earbuds and  In-ear</span>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </div>

                                        <span class="input-group-btn">
				 <button class="btn btn-secondary" type="submit" name="submit_search"><i class="material-icons">search</i></button>
			</span>
                                    </div>

                                </form>
                            </div>
                            <!-- /Block search module TOP -->

                            <!-- end modules/novadvancedsearch/novadvancedsearch-top.tpl -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>