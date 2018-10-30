### 新建本地分支
git branch -b local_v1.0

### 本地分支推送到远端
git branch push origin local_v1.0:origin_v1.0

### 当前分支关联远端分支
git branch --set-upstream-to=origin/origin_v1.0

### 删除本地分支
git branch -d local_v1.0

### 删除远端分支
git push origin :origin_v1.0
或者
git push origin -d origin_v1.0
