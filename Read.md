# 暗号化
- ルールを決めて文字を変換

### 暗号化する前
```
abcde
```

### 暗号化したあと
- 1番目と5番目を入れ替える
- 2番目と3番目を入れ替える
```
ecbda
```

### 複合化（元に戻す）
```
abcde
```

# Hash
- 数学的なアルゴリズムで文字を変換

### Hash化する前
```
abcde
```

### Hash化したあと
- 毎回違う
- 不可逆（もとに戻せない）
- 検証することはできる
- 何回も検証すれば破ることができる
- ブルーフォースアタック（Brute Force Attack）

```
$2y$10$vG90WZUr54IoPxqi..127uhrkEyZw75Vhh2PFOPFLqoJljlJGJc
```

