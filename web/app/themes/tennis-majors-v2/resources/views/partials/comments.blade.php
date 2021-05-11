@if (! post_password_required())
  <section id="comments" class="px-4">
    <div class="max-w-screen-lg m-auto py-20">
      <div class="uppercase text-4xl">
        Your <span class="font-bold">comments</span>
      </div>

      @if (have_comments())
        <h2>
          {!! sprintf(_nx('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
        </h2>

        <ol class="comment-list">
          {!! wp_list_comments(['style' => 'ol', 'short_ping' => true]) !!}
        </ol>

        @if (get_comment_pages_count() > 1 && get_option('page_comments'))
          <nav>
            <ul class="pager">
              @if (get_previous_comments_link())
                <li class="previous">
                  {!! get_previous_comments_link(__('&larr; Older comments', 'sage')) !!}
                </li>
              @endif

              @if (get_next_comments_link())
                <li class="next">
                  {!! get_next_comments_link(__('Newer comments &rarr;', 'sage')) !!}
                </li>
              @endif
            </ul>
          </nav>
        @endif
      @endif

      @if (! comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
        <x-alert type="warning">
          {!! __('Comments are closed.', 'sage') !!}
        </x-alert>
      @endif

      @php(comment_form(array(
        'class_submit'          => ' btn btn--cta col-span-2',
        'title_reply' => null,
        'comment_field' => '<p class="comment-form-comment col-span-2"><label for="comment" class="uppercase text-xs">Comment </label></br><textarea id="comment" class="mt-2" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>',
        'fields' => array(
          //Author field
          'author' => '<p class="comment-form-author col-span-1"><label for="author" class="uppercase text-xs">Author<span class="required">*</span></label><br /><input id="author" class="mt-2" name="author" aria-required="true" class="input" type="text"></input></p>',
        //Email Field
          'email' => '<p class="comment-form-email col-span-1"><label for="email" class="uppercase text-xs">Email<span class="required">*</span></label><br /><input id="email" class="mt-2" name="email"  class="input" type="text"></input></p>',
        ),
      ))
      )
    </div>
  </section>
@endif
