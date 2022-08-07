@extends('app')

@section('content')

<div class="post-hero">
    <div class="text">
        <h4>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet facere inventore dolorum quos provident, quod accusantium repellat fuga qui temporibus odit et quam molestias! Rerum quae aperiam fuga eveniet totam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quo. Qui voluptate ratione excepturi placeat, atque reprehenderit minus maiores provident ducimus voluptates dolorem sint earum, iusto eos vitae, pariatur animi! Lorem ipsum dolor sit, amet consectetur ad
        </h4>
        <a href="">More Information</a>
    </div>
    <div class="img">
        <img src="{{ asset('img/cat.png') }}" alt="cat vector">
    </div>
</div>


<div class="cards">
    @for ($i = 1; $i <=20; $i++) <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/toy.jpeg') }}" class="card-img-top" alt="pet toy">
        <div class="card-body">
            <h5 class="card-title">Product title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
            <p class="card-text">Price: <span>$3</span></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
</div>
@endfor
</div>


@endsection