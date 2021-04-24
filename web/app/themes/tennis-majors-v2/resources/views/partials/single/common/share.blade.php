<div class="my-20">
    <div class="uppercase text-2xl">
      <span class="font-bold">Share</span> this story
    </div>
    <div class="flex -mx-1 mt-4">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ get_permalink() }}" class="text-z w-14 border-2 border-black mx-1">
        Facebook
        @include('partials.images.socials.share-facebook')
        </a>
        <a href="https://twitter.com/intent/tweet?url={{ get_permalink() }}" class="text-z w-14 border-2 border-black mx-1">
        Twitter
        @include('partials.images.socials.share-twitter')
        </a>
        <a href="https://www.linkedin.com/shareArticle?url={{ get_permalink() }}" class="text-z w-14 border-2 border-black mx-1">
        Linkedin
        @include('partials.images.socials.share-linkedin')
        </a>
        <a href="https://api.whatsapp.com/send?text={{ get_permalink() }}" class="text-z w-14 border-2 border-black mx-1">
        Whatsapp
        @include('partials.images.socials.share-whatsapp')
        </a>
        <a href="mailto:?subject=Tennis Majors : {!! the_title() !!}&body=Cet article vous est recommandé :%0D%0A%0D%0A{{ the_title() }}%0D%0A{{ get_permalink() }}" class="text-z w-14 border-2 border-black mx-1">
        Email
        @include('partials.images.socials.share-email')
        </a>
    </div>
</div>