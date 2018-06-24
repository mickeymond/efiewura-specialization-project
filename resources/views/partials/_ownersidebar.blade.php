<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('owner-index')}}" class="site_title"><i class="fa fa-paw"></i> <span>Efiewuragh</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
                <?php
                use Illuminate\Support\Facades\Auth;

                $user = Auth::user();

                ?>
            <div class="profile clearfix">
              <div class="profile_pic">
                <script>
                 function callfun(obj)
                 {
                        var noimg = "{{ asset('images/avatar.png')}}";
                        obj.src=noimg;
                }
                </script>

                <img src="{{ asset("profilepics/$user->profile_pic")}}" onerror="this.onerror=null;callfun(this);" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Dashboard</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>My Properties <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">View Properties</a></li>
                      <li><a href="#">Property Type</a></li>
                      <li><a href="{{route('add-property')}}">Add Properties</a></li>
                      <li><a href="#">Amenities</a></li>
                      <li><a href="#">Locations</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Gallary <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href=" {{route('owner-houses')}} ">House</a></li>
                      <li><a href=" {{route('owner-lands')}} ">Land</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Other</a></li>
                      
                    </ul>
                  </li>
                </ul>
              </div>
              
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>