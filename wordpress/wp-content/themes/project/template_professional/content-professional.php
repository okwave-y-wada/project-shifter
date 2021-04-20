<?php
/**
 * template  : 専門家
 */
?>

<article class="post_contents">
	<?php do_action( 'habakiri_before_entry_content' ); ?>

	<?php the_content(); ?>

	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
</article>

<section class="bg-type01">
	<div class="container">
		<div class="step-box text-center">
			<div class="sub-box">
			<p class="sm_mB10"><span class="marker marker-red">OKWAVEで質問してみよう！</span></p>
			<p class="txt-small" style="color: #FFF;">OKWAVEには様々な人が参加して回答しています。気になることをぜひ質問してみてください。</p>
		</div>
		<div class="flow-box">
			<div class="box ">
				<div class="row">
					<div class="col-md-4"><img src="/wp-content/themes/project/original/img/professional/sp_kiji/step_01.png" alt="01" width="500">
					</div>
					<div class="col-md-7 offset-md-1">
						<h3 class="tit-type03">OKWAVEのアカウントで<br class="pcN">ログイン</h3>
						<p class="mB30 sm_mB10">質問するにはOKWAVEの会員登録が必要です。 </p>
						<ul class="row">
							<li class="col-md-6 text-center sm_mB10">
								<a href="https://sp.okwave.jp/register" class="btn btn-red" target="_blank" rel="noopener noreferrer">OKWAVEのアカウントをお持ちでない方<span>新規会員登録</span></a>
							</li>
							<li class="col-md-6 text-center">
								<a href="https://okwave.jp/login" class="btn btn-blue" target="_blank" rel="noopener noreferrer">OKWAVEのアカウントをお持ちの方<span>ログイン</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="box ">
				<div class="row">
					<div class="col-md-4"><img src="/wp-content/themes/project/original/img/professional/sp_kiji/step_02_q.png" alt="02">
					</div>
					<div class="col-md-7 offset-md-1">
						<h3 class="tit-type03">質問を投稿</h3>
						<p>知りたいこと、悩んでいること、質問の際はその理由や背景も含めてご質問ください。
						回答者も丁寧に回答することができます。回答が付いた際は、お礼やありがとうボタン、
						OK-チップなどで謝意を伝えましょう。<br>
						<br>
						OKWAVE：質問するときのコツとマナー<br>
						<a href="https://secure.okbiz.okwave.jp/okwave-faq/faq/show/2536" target="_blank">https://secure.okbiz.okwave.jp/okwave-faq/faq/show/2536</a>
						</p>
					</div>
				</div>
			</div>
			
			<div class="box ">
				<div class="row">
					<div class="col-md-4"><img src="/wp-content/themes/project/original/img/professional/sp_kiji/step_03.png" alt="03">
					</div>
					<div class="col-md-7 offset-md-1">
						<h3 class="tit-type03">Q&amp;Aに参加してOK-チップを集めよう！</h3>
						<p>質問だけでなく、回答にも参加していくと、優待に交換可能なOK-チップを集めやすくなります。Q&amp;Aサイトはお互いに助け合うことで広がります。あなたの知識や意見を、ぜひ他の質問者の手助けにも役に立ててください！<br>
						<br>
						OKWAVE：最新の優待一覧<br>
						<a href="https://okwave.jp/te_benefit" target="_blank">https://okwave.jp/te_benefit</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>