$(document).ready ->

	###
	Blog Posts Content Toggle
	###
	$('.blog_post-content').hide()
	$('.blog_post-title').on 'click', () ->
		$this = $(this)
		collapse = $this.closest('.blog_posts-list_item').find('.blog_collapse-post')
		$this.closest('.blog_posts-list_item').find('.blog_post-content').slideDown()
		if(collapse.length)
			collapse.removeClass('blog_collapse-post__hide')
			return
		$('<span></span>', {
			text: "свернуть",
			class: "blog_collapse-post"
			}).insertAfter($this)
				.on 'click', ()-> 
					$this = $(this)
					$this.addClass 'blog_collapse-post__hide'
					$this.closest('.blog_posts-list_item').find('.blog_post-content').slideUp()
				
					
	###
	Chained.js
	###
	$('.blog-post_vehicle').chained $('.blog-post_kind-vehicle')