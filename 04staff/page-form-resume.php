<?php get_header(); ?>
<div class="menuBody">
	<header class="menuTtl">
		<h1>WEB履歴書 入力フォーム</h1>
	</header>
	<nav class="resumeChart">
		<ol>
			<li class="active">入力フォーム</li>
			<li>確認画面</li>
			<li>完了画面</li>
		</ol>
	</nav>
	<main>
		<article class="singleBody resume">
			<section class="single-info">
				<h2>基本情報<i class="is-req">必須</i></h2>
				<div class="single-info__inner resume-form">
					<ul class="info-list">
						<li class="is-float">
							<h3>顔写真</h3>
							<div class="form-file">
								<label for="resume-upload" class="btn-base btn-blue is-small">ファイルを選択
								<input id="resume-upload" type="file"></label>
								<p>選択されていません</p>
							</div>
						</li>
						<li>
							<h3>お名前</h3>
							<span><input type="text" class="form-mid"></span>
						</li>
						<li>
							<h3>ふりがな</h3>
							<span><input type="text" class="form-mid"></span>
						</li>
						<li>
							<h3>性別</h3>
							<span class="form-select is-short">
								<select name="" id="">
									<option value="性別">性別</option>
									<option value="男性">男性</option>
									<option value="女性">女性</option>
								</select>
							</span>
						</li>
						<li>
							<h3>生年月日</h3>
							<span><input type="text" class="form-mid"></span>
						</li>
						<li>
							<h3>メールアドレス</h3>
							<span><input type="text" class="form-mid"></span>
						</li>
						<li>
							<h3>郵便番号</h3>
							<span><input type="text" class="form-mid"></span>
						</li>
						<li>
							<h3>住所</h3>
							<span><input type="text"></span>
						</li>
						<li>
							<h3>電話番号</h3>
							<span><input type="text" class="form-mid"></span>
						</li>
						<li>
							<h3>最終学歴</h3>
							<span><input type="text"></span>
						</li>
						<li>
							<h3>資格・免許</h3>
							<span><input type="text"></span>
						</li>
						<li>
							<h3>職歴</h3>
							<span><input type="text"></span>
						</li>
					</ul>
				</div>
			</section>
			<section class="single-info">
				<h2>業務情報<i class="is-req">必須</i></h2>
				<div class="single-info__inner resume-form">
					<ul class="info-list">
						<li>
							<h3>希望職種</h3>
							<span>
								<input type="text" placeholder="例）訪問介護員">
							</span>
						</li>
						<li>
							<h3>希望勤務地</h3>
							<span><input type="text" placeholder="例）那覇市、浦添市、宜野湾市、北谷町、沖縄市、うるま市　など（複数地記載可）"></span>
						</li>
						<li>
							<h3>勤務希望日時</h3>
							<span><input type="text" placeholder="例）平日9:00〜17:00"></span>
						</li>
						<li>
							<h3>志望動機</h3>
							<span><input type="text" placeholder="簡単でOK！パート希望の方はこちらに希望勤務時間の記入をお願い致します"></span>
						</li>
						<li>
							<h3>面接可能な曜日・時間</h3>
							<span><input type="text" placeholder="例：月曜日午後5時以降　など"></span>
						</li>
						<li>
							<h3>参考にした媒体</h3>
							<span class="form-select is-mid">
								<select name="" id="">
									<option value="なし">なし</option>
									<option value="男性">男性</option>
									<option value="女性">女性</option>
								</select>
							</span>
						</li>
						<li>
							<h3>自己PR</h3>
							<span><textarea name="" id="" cols="30" rows="10"></textarea></span>
						</li>
					</ul>
				</div>
			</section>
			<section class="single-info">
				<h2>ご質問がありましたら<br class="only-sp">ご自由にご記入ください<div class="is-btn"><button class="btn-base btn-blue is-small">修正する</button></div></h2>
				<div class="single-info__inner resume-form">
					<ul class="info-list">
						<li><textarea name="" id="" cols="30" rows="10"></textarea></li>
					</ul>
				</div>
			</section>
			<div class="toList">
				<button class="btn-base btn-blue is-large"><span>確認画面に進む</span></button>
			</div>
<?php get_footer(); ?>