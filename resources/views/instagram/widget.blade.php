@section('add_in_head')
    <link rel="stylesheet" href="/site/css/sb-instagram.min.css"   type="text/css"   media="all"/>
@stop

@php
     $serviceApiInstagram = new \App\Services\ServiceApiInstagram();
     $INSTAGRAM_ACCOUNT_DATA = $serviceApiInstagram->userInfo();
     $INSTAGRAM_DATA = $serviceApiInstagram->data();
@endphp

@if($INSTAGRAM_ACCOUNT_DATA and $INSTAGRAM_DATA)
    <div id="home-shortcode" class="home-shortcode">
        <div id="sb_instagram" class="sbi sbi_mob_col_auto sbi_col_6 lazyloaded sbi_medium">
            <div class="sb_instagram_header">
                <a href="https://www.instagram.com/{{ $INSTAGRAM_ACCOUNT_DATA->username }}" target="_blank" rel="noopener" title="{{ $INSTAGRAM_ACCOUNT_DATA->username }}" class="sbi_header_link">
                    <div class="sbi_header_text">
                        <h3 title="Мы в Instagram" class="sbi_no_bio">{{ $INSTAGRAM_ACCOUNT_DATA->username }}</h3>
                    </div>
                    <!--
                    <div class="sbi_header_img">
                        <div class="sbi_header_img_hover"><i class="sbi_new_logo"></i></div>
                        <img src="https://instagram.ffru5-1.fna.fbcdn.net/vp/1555d540e0321794ebcde0830ce529b7/5DF2B4F1/t51.2885-19/44884218_345707102882519_2446069589734326272_n.jpg?_nc_ht=instagram.ffru5-1.fna.fbcdn.net" alt="Park Of Ideas" width="50" height="50">
                    </div>
                    -->
                </a>
            </div>
            <div id="sbi_images">
                @foreach($INSTAGRAM_DATA as $key => $result)
                    @if($key == 6) @break @endif
                    <div class="sbi_item sbi_type_image">
                        <div class="sbi_photo_wrap">
                            <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready"
                               alt="{{ $result->caption->text ?? '' }}"
                               title="{{ $result->caption->text ?? '' }}"
                               href="{{ $result->link }}"
                               target="_blank"
                               rel="noopener"
                               style="background-image: url('{{ $result->images->thumbnail->url }}');
                                   background-size: cover;
                                   background-position: center center;
                                   background-repeat: no-repeat;
                                   height: 208px;
                                   opacity: 1;">
                                <img src="{{ $result->images->thumbnail->url }}" alt="" width="200" height="200" style="display: none;"/>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="sbi_load" class=""></div>
        </div>
        <!-- INSTA -->
    </div>
@else
    <p>Instagram пусто</p>
@endif
