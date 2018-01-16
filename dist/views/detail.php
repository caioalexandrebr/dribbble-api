<section ng-controller="DetailCtrl as detailCtrl">
    <div class="shot-detail">
        <img class="shot-detail-image-normal" ng-src="{{detailCtrl.shot.images.normal}}"> 
        <span class="title-bar">
            <span class="title-text">{{detailCtrl.shot.title}}</span> 
            <span class="views-count">
                <i class="fa fa-eye" aria-hidden="true"></i> 
                {{detailCtrl.shot.views_count}}
            </span>
        </span>
    </div>
    <div class="shot-user-bio">
        <!-- Avatar -->
        <span class="user-avatar-content">
            <img class="user-avatar" ng-src="{{detailCtrl.shot.user.avatar_url}}">
        </span>
        <!-- Usuário -->
        <span class="user-name">{{detailCtrl.shot.user.name}}</span>
        <!-- Biografia -->
        <span class="user-bio" ng-bind-html="detailCtrl.shot.user.bio"></span>
        <!-- Descrição -->
        <span style="color: red;" class="user-bio" ng-bind-html="detailCtrl.shot.description"></span> 

    </div>
</section>