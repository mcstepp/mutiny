<div class="card m-card m-text-shadow bg-industrial-gray-700">
    <div class="card-body p-3 clearfix">
        <i class="fas fa-trophy bg-gray-700 p-3 font-2xl mr-3 float-left"></i>
        <div class="h2 mt-2 mb-0">{{ auth()->user()->points }}</div>
        <div class="text-uppercase font-xs m-fancy-header">My Points</div>
    </div>
    <div class="card-footer bg-gray-700 px-3 py-2">
        <a class="text-white m-fancy-title text-uppercase font-xs btn-block flicker" href="#">Redeem Points <i class="text-white fa fa-angle-right float-right font-lg"></i></a>
    </div>
</div>