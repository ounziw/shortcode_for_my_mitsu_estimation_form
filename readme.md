# 自動計算&見積書作成フォームをWordPressに埋め込むショートコードを生成するプラグイン

自動見積もりフォーム生成サービス[マイ見積](https://my-mitsu.jp/)で生成した見積もりフォームを、WordPressで作成したホームページの記事本文に埋め込む。

このプラグインを導入すると、iframe html tag を簡単に出力できます。（ショートコードを記述すると、iframe html を出力します。）

## 見積書作成方法
1. マイ見積のサービスサイトに無料登録する
1. ログインして、見積もりフォームの計算式、条件分岐などを登録する
1. このプラグインをWordPressにインストールする
1. ショートコードで見積もりフォームをWordPressに埋め込む
1. ホームページ訪問者がフォームに入力して見積書発行する

## マイ見積の使い方
[自動見積フォーム作成方法](https://my-mitsu.com/howto)を参照。

## WordPressプラグインについて
マイ見積で作成したフォームは、iframe htmlで埋め込むことができる。このため、WordPressの他、pulseCMS、baserCMS、concrete5など、どんなホームページにも埋め込み可能。
ただし、iframeで埋め込む場合はhtmlの知識が要求される。このためhtmlコードを書かなくても埋め込みできるように、WordPressプラグインを作成し、無償公開した。

## ショートコード例
[mymitsu]274[/mymitsu] と入力すると <iframe src=”https://my-mitsu.jp/estimation/274″ id=”mymitsu” width=”640″ height=”480″></iframe> を出力します。

ショートコードでは、オプション属性として、ID, width, height を設定できます。

[mymitsu id=”myform” width=”800″ height=”600″]274[/mymitsu] と入力すると、 <iframe src=”https://my-mitsu.jp/estimation/274″ id=”myform” width=”800″ height=”600″></iframe> を出力します。

## プラグインカスタマイズ
フィルターフック mymitsu_default_atts が用意されているので、本プラグインをカスタマイズするプラグイン(子プラグインのようなもの。)を作成可能。

## ライセンス
GPL
