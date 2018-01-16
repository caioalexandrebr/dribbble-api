<section class="container" ng-controller="DetailCtrl as detailCtrl">

    <div class="content-default">
        <div class="row">

            <div class="col-xs-12 col-md-6">

                <div class="box-img">
                    <img class="img-responsive" ng-src="{{detailCtrl.shot.images.normal}}">
                </div>

            </div>

            <div class="col-xs-12 col-md-6">

                <h2>{{detailCtrl.shot.title}}</h2> <!-- Título -->

                <div class="content-count">
                    <div class="views-count">
                        <i class="mdi mdi-eye"></i>{{detailCtrl.shot.views_count}} <!-- Views -->
                    </div>
                    <div class="comments-count">
                        <i class="mdi mdi-comment"></i>{{detailCtrl.shot.comments_count}} <!-- Comments -->
                    </div> 
                    <div class="likes-count">
                        <i class="mdi mdi-heart"></i>{{detailCtrl.shot.likes_count}} <!-- Likes -->
                    </div>
                </div>
                
                <div class="detail-text" ng-bind-html="detailCtrl.shot.description"></div> <!-- Descrição -->

                <div class="content-user-detail">
                    <div class="content-user-avatar">
                        <div class="user-avatar-detail">
                            <img class="img-responsive img-circle" ng-src="{{detailCtrl.shot.user.avatar_url}}"> <!-- Avatar -->
                        </div>
                        <div class="user-user-detail">
                            <p>{{detailCtrl.shot.user.name}}</p> <!-- Username -->
                        </div>
                    </div>
                    
                    <span ng-bind-html="detailCtrl.shot.user.bio"></span> <!-- Biografia -->

                </div>

            </div>

        </div>
    </div>
</section>