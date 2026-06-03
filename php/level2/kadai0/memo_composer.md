# なぜ今回の教材で composer.json / composer.lock / vendor/ を level1 から movefree_program のルートに移動したのか

- movefree_program 全体を 1 つの Composer プロジェクトとして扱うため
- Level2 以降で作るコードからも、同じ vendor/ を共有できるようにするため
- level1 配下にあると、そのディレクトリ内でしか利用できず不便なため
- 実務でよくある「1リポジトリ = 1プロジェクト」の構成に近づけるため
