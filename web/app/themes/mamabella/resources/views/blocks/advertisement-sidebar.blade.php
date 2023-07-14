{{--
  Title: Advertisement Sidebar
  Description: advertisement Sidebar
  Category: formatting
  Icon: edit
  Keywords: advertisement Sidebar
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

<section class=" mt-8 rounded-t-xl flex flex-col gap-y-[2rem] rounded-b-xl ">
    <div class="w-full rounded min-h-[200px] flex  bg-cover items-center bg-center justify-start"
        style="background-image: url(' {{ get_field('background_image') }} ')">
        <div class="w-3/4">
            <h2 class="pl-[3rem] fancy_title text-primary font-primary leading-[50px]"> {!! get_field('box_1_title') !!} </h2>
        </div>
    </div>

    <div class="w-full rounded min-h-[161px] bg-center bg-cover"
        style="background-image: url(' {{ get_field('background_image_2') }} ')">
        <div class="w-full rounded min-h-[200px] flex  bg-cover items-center bg-center justify-center text-center">
            <h2 class="fancy_title text-white font-primary"> {!! get_field('box_2_title') !!} </h2>
        </div>
    </div>

    <div class="flex w-full bg-center rounded min-h-[161px] bg-cover justify-end"
        style="background-image: url(' {{ get_field('background_image_3') }} ')">
        <div class="w-3/4 flex justify-end min-h-[200px] items-center">
            <h2 class="fancy_title fancy_title__outline text-end font-primary leading-[50px] text-primary pr-[2rem]">
                {!! get_field('box_3_title') !!}
            </h2>
        </div>
    </div>

    <div
        class="w-full rounded min-h-[161px] bg-cover bg-secondary min-h-[300px] flex flex-col ustify-center items-center text-center justify-center">
        <h2 class="font-primary text-white text-[50px]">Ad space</h2>
    </div>

</section>
