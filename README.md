# 「ララスター☆彡（larastar.php）」とは
プロジェクトごとにLaravelやらHomesteadをインストールする際のコマンドを自動的に実行するように処理をつらつら書いたバッチです。  
デフォルトのインストールバージョンは5.5系（LTS）の最新です。


# ファイル構成
## larastar.php
「ララスター☆彡」本体ファイル。PHPの為、PCにPHPをインストールしてから実行してください。  
※デフォルトで最新の5.5系がインストールされるように書いていますが、もし異なるバージョンを入れたい場合は、  
「larastar.php」内の定数「VERSION」の部分のバージョンを書き換えてください。（その際の動作は保証されません。）

## larastar_launcher.bat
Windows用batfileです。「larastar.php」と同じ場所に置いて実行すると、「larastar.php」を実行してくれます。

# 使い方
- ①「ララスター☆彡（larastar.php）」をプロジェクト毎のディレクトリ直下へコピーまたは移動させる。
- ②コマンドプロンプトまたはbash等から「ララスター☆彡（larastar.php）」を起動する  
※Windowsの場合は付属の「larastar_launcher.bat」をクリックで自動的に起動します。
- ③勝手にLaravelやらHomesteadのインストールが始まります。
- ④「ララスター☆彡（larastar.php）」が終了した後に「Homestead.yaml」内のパスを書き換えて、「vagrant reload」を行えば完了です。
