@foreach($camps as $camps)

<div class="recommend_item parallel">
   
    

    {{$camps -> camp_name}}
    {{$camps -> state}}
    {{$camps -> city}}



    
</div> 

@endforeach