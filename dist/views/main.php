<header class="text-center">
    <!-- Header -->
</header>

<div class="container">
    <main ng-controller="MainCtrl as mainCtrl">
        <ul class="nospace">
            <li class="col-xs-12 col-sm-6 col-md-3 shot nolist" ng-repeat="shot in mainCtrl.shots">

                <a ng-href="#!/detail/{{shot.id}}">
                    <img class="img-responsive shot-image-normal" ng-src="{{shot.images.normal}}"> 
                    <span class="title-bar">
                    <span class="title-text">{{shot.title}}
                    </span> 
                    <span class="views-count">
                    <i class="fa fa-eye" aria-hidden="true"></i> {{shot.views_count}}
                    </span>
                    </span>
                </a>
                <i class="mdi mdi-eye"></i>
                <button data-toggle="collapse" data-target="#country-{{$index}}">Open The Tcheca</button>

                <div id="country-{{$index}}" class="collapse">
                    <span style="color: red;" class="user-bio" ng-bind-html="shot.description"></span>
                </div>

                <li ng-show="mainCtrl.shots.length == 0 || mainCtrl.shots == null">Carregando...</li>
            </li>
        </ul>
    </main>
</div>

<footer class="text-center">
    <!-- Footer -->
</footer>