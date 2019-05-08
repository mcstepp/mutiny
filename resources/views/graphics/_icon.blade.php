

@if($type == 'user')
            <author-icon :author="{{ json_encode($author->makeHidden(['points','role_id','slug','path','parent_id','created_at','updated_at','id'])->toArray()) }}" size="{{ isset($size) ? $size : 0 }}" use-default="true" class="m-icon border-gray-800"></author-icon>
        @else
            <author-icon :author="{{ json_encode($author->makeHidden(['id','user_id','slug','path','origin_faction_id','occupation','ic_birth_month','ic_birth-day','ic_birth_year','initiation_year','age','personality','history','appearance','faceclaim','credit','created_at','updated_at','id'])->toArray()) }}" size="{{ isset($size) ? $size : 0 }}" use-default="true" class="m-icon border-gray-800"></author-icon>
@endif
