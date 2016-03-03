  <div class="row">
          <div class="container">
             <input type="text" class="form-control" placeholder="请输入搜索词" ng-model="keyword" value="">
          </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4" ng-repeat="product in products">
           <a class="tu-link" href="#products/{{product.id}}">
             <img ng-src="{{product.image}}">
           </a>
           <strong>{{product.title}}</strong>
           <p>标签：{{product.tags}}</p>
      </div>

    </div>
  </div>