<div>
	<div class="content-top clearfix">
	<h1 class="al-title" style="padding-left:20px;">Dashboard</h1>
		<ul class="breadcrumb al-breadcrumb">
			<li>
			  <a href="#/dashboard">Home</a></li>
			<li class="">Dashboard</li>
		</ul>
	</div>
</div>
<div class="dashboard">
	<div class="row">
		<div class="col-lg-3 col-md-12 col-sm-12">
			<div class="col-lg-12 col-md-12 col-sm-12">
			   <div class="panel with-scroll table-panel">
				  <div class="panel-heading clearfix">
					 <h3 class="panel-title">Employee List</h3>
				  </div>
					<ul class="list-group">
						<li class="list-group-item" ng-repeat="list in employees" ng-click="showDetails(list.id, list.worked_with, list.name, list.bio, list.biolink, list.picture_url, list.popularity)" ng-class="{'selected': list.id == workedWithCol[list.id]}">
							<span style="font-size:{{list.popularity}}0%" ng-if="list.popularity>3">{{list.name}}</span>
							<span style="font-size:40%" ng-if="list.popularity<3">{{list.name}}</span>
						</li>
					</ul>
			   </div>
			</div>
		</div>
		<div class="col-lg-9 col-md-12 col-sm-12" ng-show="employeeDetails" ng-cloak>
			<div class="col-lg-12 col-md-12 col-sm-12">
			   <div class="panel with-scroll table-panel animated zoomIn">
				  <div class="panel-heading clearfix">
					 <h3 class="panel-title">Employee Details</h3>
				  </div>
					<ul class="list-group">
						<li class="list-group-item clearfix">
							<div class="col-lg-3 col-md-12 col-sm-12">
								<img ng-src="{{pictureUrl}}" width="150px">
							</div>
							<div class="col-lg-9 col-md-12 col-sm-12">
								<h3 style="font-size:{{priceSlider1.value}}%">{{name}}</h3>
								<p><a ng-href="{{biolink}}">Biography</a></p>
								<p class="bio">{{bio}}</p>
							</div>
						</li>
					</ul>
					<rzslider rz-slider-model="priceSlider1.value" rz-slider-floor="priceSlider1.floor" rz-slider-ceil="priceSlider1.ceil"></rzslider>
			   </div>
			</div>
		</div>
	</div>
</div>