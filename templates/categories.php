
	<div class="list list-scroll" ng-controller="maincontent">
			<a class="item item-thumbnail-left" href="/categories/{{data.id}}" ng-repeat="data in maindata">
			  <img src="{{data.imageUrl}}">
			  <h2>{{data.name}}</h2>
			  <p class="item_p">{{data.snippet}}</p>
			</a>
	</div>
