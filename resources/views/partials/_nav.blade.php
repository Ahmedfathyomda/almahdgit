   <!--navBar-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Almahd Clinics</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="{{Request::is('/')?"active":""}}">
                    <a class="nav-link" href="/visits/">اليومية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/clinics">العيادات</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                الأطباء
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                
                <a class="dropdown-item" href="/doctors/create">طبيب جديد</a>
                <div class="dropdown-divider"></div>  
                <a class="dropdown-item" href="/doctors">عرض الأطباء</a>
                
                            
                </div>
            </li>

            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    المرضى
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    
                    <a class="dropdown-item" href="/patients/create">مريض جديد</a>
                    <div class="dropdown-divider"></div>  
                    <a class="dropdown-item" href="/patients">عرض المرضى</a>
                    
                                
                    </div>
                </li>

        
        </ul>
        

        <ul class="nav navbar-nav navbar-right mr-5">

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
      </li>
        
        </ul>

      
    </div>
    </nav>
    <!--end of nav-->
