<style type="text/css">
    /*
 *
 *   This is style for skin config
 *   Use only in demo theme
 *
*/

.theme-config {
  position: fixed;
  top: 90px;
  right: 0;
  overflow: hidden;
  z-index: 9999999;
}

.theme-config-box {
  margin-right: -220px;
  position: relative;
  z-index: 2000;
  transition-duration: 0.8s;
}

.theme-config-box.show {
  margin-right: 0;
}

.spin-icon {
  background: #00257b;
  position: absolute;
  padding: 7px 10px 7px 13px;
  border-radius: 20px 0 0 20px;
  font-size: 16px;
  top: 0;
  left: 0;
  width: 40px;
  color: #fff;
  cursor: pointer;
}

.skin-settings {
  width: 220px;
  margin-left: 40px;
  background: #f3f3f4;
}

.skin-settings .title {
  background: #efefef;
  text-align: center;
  text-transform: uppercase;
  font-weight: 600;
  display: block;
  padding: 10px 15px;
  font-size: 12px;
}

.setings-item {
  padding: 10px 30px;
}

.setings-item.skin {
  text-align: center;
}

.setings-item .switch {
  float: right;
}

.skin-name a {
  text-transform: uppercase;
}

.setings-item a {
  color: #fff;
}

.default-skin, .blue-skin, .ultra-skin, .yellow-skin {
  text-align: center;
}

.default-skin {
  font-weight: 600;
  background: #283A49;
}

.default-skin:hover {
  background: #1e2e3d;
}

.blue-skin {
  font-weight: 600;
  background: url("patterns/header-profile-skin-1.png") repeat scroll 0 0;
}

.blue-skin:hover {
  background: #0d8ddb;
}

.yellow-skin {
  font-weight: 600;
  background: url("patterns/header-profile-skin-3.png") repeat scroll 0 100%;
}

.yellow-skin:hover {
  background: #ce8735;
}

.ultra-skin {
  padding: 20px 10px;
  font-weight: 600;
  background: url("patterns/3.png") repeat scroll 0 0;
}

.ultra-skin:hover {
  background: url("patterns/4.png") repeat scroll 0 0;
}
</style>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css" />
<div class="theme-config">
    <div class="theme-config-box">
        <div class="spin-icon">
            <i class="fa fa-cogs"></i>
            @if (App::getLocale() == 'en')
                <i class="flag-icon flag-icon-gb"></i>
            @elseif (App::getLocale() == 'es')
                <i class="flag-icon flag-icon-es"></i>
            @endif
        </div>
        <div class="skin-settings">
            <div class="title">{{ trans('app.lang') }}</div>
            @if (App::getLocale() == 'en')
                <div class="setings-item">
                    <a href="{{ url('lang', ['es']) }}"><span>
                        <i class="flag-icon flag-icon-es"></i> Change into Spanish
                    </span></a>
                </div>
            @elseif (App::getLocale() == 'es')
                <div class="setings-item">
                    <a href="{{ url('lang', ['en']) }}"><span>
                        <i class="flag-icon flag-icon-gb"></i> Cambiar a Inglés
                    </span></a>
                </div>
            @endif
            
        </div>
    </div>
</div>

