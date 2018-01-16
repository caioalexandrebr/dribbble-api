<div class="container">
    <main ng-controller="MainCtrl as mainCtrl">
        <ul class="nospace">
            <li class="col-xs-12 col-sm-6 col-md-4 nolist shot-list" ng-repeat="shot in mainCtrl.shots">
                <div class="content-default">
                    
                    <div class="box-img">
                        <a ng-href="#!/detail/{{shot.id}}">
                            <img class="img-responsive" ng-src="{{shot.images.normal}}">
                        </a>
                    </div>    
                    
                    <div class="content-title">
                        <span class="title-text"><a ng-href="#!/detail/{{shot.id}}">{{shot.title}}</a></span> <!-- Titulo --> 
                        <div class="content-count">
                            <div class="views-count">
                                <i class="mdi mdi-eye"></i>{{shot.views_count}} <!-- Views -->
                            </div>
                            <div class="comments-count">
                                <i class="mdi mdi-comment"></i>{{shot.comments_count}} <!-- Comments -->
                            </div> 
                            <div class="likes-count">
                                <i class="mdi mdi-heart"></i>{{shot.likes_count}} <!-- Likes -->
                            </div>
                        </div>  
                    </div>

                </div>

                <div class="content-user">
                    <div class="user-avatar">
                        <img class="img-responsive img-circle" ng-src="{{shot.user.avatar_url}}"> <!-- Avatar -->
                    </div>
                    <div class="user-name">
                        <span>{{shot.user.name}}</span> <!-- Username -->
                    </div>
                </div>

                <li class="col-xs-2 col-xs-offset-10 nolist" style="margin: 0 auto;" ng-show="mainCtrl.shots.length == 0 || mainCtrl.shots == null">Loading...</li>
            </li>
        </ul>
    </main>
</div>