<div class="row canhan">
        <div class="col-sm-4 avatar">
            <img src="upload/avatar/{{$user->avatar}}">
            <h3>{{$user->name}}</h3>
            <h6>({{$user->nick_name}})</h6>
            <div class="flex">
                <a href="{{$user->link_facebook}}"><i class="fab fa-facebook"></i></a>
                <a href="{{$user->link_instagram}}"><i class="fab fa-instagram"></i></a>
                <a href="{{$user->link_twitter}}"><i class="fab fa-twitter-square"></i></a>
            </div>
            <p>{{$user->decription}}</p>
            <ul class="nav nav-tabs">
                <li class="nav-item nav-p">
                    <a class="nav-link " href="#">Bài viết</a>
                </li>
                @if(Auth::check())
                   @if(Auth::user()->id==$user->id)
                   <li class="nav-item nav-p">
                        <a class="nav-link" href="#">Đã lưu</a>
                    </li>
                    <li class="nav-item nav-p">
                        <a class="nav-link"  onclick="clicktb()">Thông báo</a>
                    </li>
                    <li class="nav-item nav-p">
                        <a class="nav-link " href="#">Thông tin</a>
                    </li>
                    <div class="thongbao" id="tb_id">
                        <p><a href="#">ffdfdfdfdfdfd</a></p>
                    </div>
                   @endif
                @endif
            </ul>
        </div>
        <div class=" col-sm-8 anhbia">
            <img src="upload/anhbia/{{$user->anh_bia}}" alt="" class="ing">
        </div>
    </div>
