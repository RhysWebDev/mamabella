{{--
  Title: Footer Block
  Description: Footer Block
  Category:  custom-layouts
  Icon: format-image
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}

<div class="decorated-title__article-footer grid grid-cols-12 p-[1rem] items-center border-[8px] border-secondary">
    <div class="col-2 col-span-2">
        <img class="w-auto max-h-[147px]" src="{{ get_field('author_image') }}">
    </div>
    <div class="col-9 col-span-9">
        <h3 class="text-secondary font-secondary text-[20px] mb-[0.5rem]">
            {{ get_field('author_name') }}
        </h3>
        <div class="text-[14px] font-secondary text-primary pr-[2rem]">{!! get_field('author_text') !!}
        </div>
    </div>
</div>

<div class="decorated-title__notice font-bold pt-[3rem]  mb-[3rem]">
    This site contains affiliate links to recommended products. We may receive a commission for
    purchases made through these links. We will not recommend anything we don't believe in and
    we are not paid by brands to include specific products unless explicitly stated.
</div>
