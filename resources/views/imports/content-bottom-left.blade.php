<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 11/03/2016
 * Time: 10:42
 */
?>

<div class="categories">
    <ul>
        <h3>Browse All Categories</h3>

            @foreach($categories as $category)
                    <li><a href="{{route('category', array('n' => $category->id )) }}">{{$category->name}}</a></li>
            @endforeach

    </ul>
</div>
<div class="buters-guide">
    <h3>Buyers Guide</h3>
    <p><span>We want you to be happy with your purchase.</span></p>
    <p>So we're committed to giving you all the tools to make the right decision with minimum fuss. </p>
</div>