<p align="center"><img alt="live.lizanyang.top" src="https://live.lizanyang.top/logo.png"></p>
<h1 align="center"> ✯ 一个可直连访问的电视/广播图标库与相关工具项目 ✯ </h1>
<h3 align="center">🔕 永久免费 直连访问 完整开源 不断完善的台标 支持IPv4/IPv6双栈访问 🔕</h3>

<p align="center">
<img alt="GitHub Repo stars" src="https://img.shields.io/github/stars/lizanyang3/live?style=flat-square">
<img alt="GitHub forks" src="https://img.shields.io/github/forks/lizanyang3/live?style=flat-square">
<img alt="GitHub issues" src="https://img.shields.io/github/issues/lizanyang3/live?style=flat-square">
<img alt="GitHub watchers" src="https://img.shields.io/github/watchers/lizanyang3/live?style=flat-square">
<img alt="GitHub contributors" src="https://img.shields.io/github/contributors/lizanyang3/live?style=flat-square">
<img alt="GitHub" src="https://img.shields.io/github/license/lizanyang3/live?style=flat-square">
</p>

---

## 🤹‍♂️使用方法:

### 🌇电视/广播图标库：

| 类 别  | 调用路径                                       | 最后更新   |
|-------|------------------------------------------------|------------|
| 📺电视  | [https://live.lizanyang.top/tv/{频道名称}.png](https://github.com/lizanyang3/lizanyang3.github.io/tree/main/tv) | 2024.2.3    |
| 📻广播  | [https://live.lizanyang.top/radio/{频道名称}.png](https://github.com/lizanyang3/lizanyang3.github.io/tree/main/radio) | 2023.8.27   |

### ⛓️创建您的m3u订阅链接：
 - 下载 `demo.m3u` 空白示例文件并使用文本编辑软件打开。
   - [https://live.lizanyang.top/tv/m3u/demo.m3u](https://live.lizanyang.top/tv/m3u/demo.m3u)

 - 参考下方示例代码将`可用的CCTV1节目源`替换为您当地可用的直播源链接，依此类推逐个替换。

```
#EXTM3U x-tvg-url="https://live.lizanyang.top/e.xml"
#EXTINF:-1 tvg-id="CCTV1" tvg-name="CCTV1" tvg-logo="https://live.lizanyang.top/tv/CCTV1.png" group-title="央视",CCTV-1 综合
可用的CCTV1节目源
此处省略...
```

 - 将编辑完成的m3u文件上传到您的Github仓库。
 - 为您的Github仓库开启Pages。
 - 通过播放器订阅您的m3u链接。

> 关于Github Pages：[https://docs.github.com/en/enterprise-cloud@latest/pages/quickstart](https://docs.github.com/en/enterprise-cloud@latest/pages/quickstart)

## 🛠️工具
- 📆**EPG接口地址**：
  -  [https://live.lizanyang.top/e.xml](https://live.lizanyang.top/e.xml)
 
- 🌹**直播订阅地址**：
-   [https://live.lizanyang.top/hn.m3u](https://live.lizanyang.top/hn.m3u)
 
- 🎞️**m3u8下载工具**：
  -  [https://live.lizanyang.top/m3u8](https://live.lizanyang.top/m3u8)
- 🆕**TXT转M3U格式**：
  - [https://live.lizanyang.top/txt2m3u](https://live.lizanyang.top/txt2m3u)
- 🌐**M3U8 Web Player**:
  - Demo🔗 [https://live.lizanyang.top/player/?vurl=https://0472.org/hls/cctv13.m3u8](https://live.lizanyang.top/player/?vurl=https://0472.org/hls/cctv13.m3u8)

## 📖说明
- 项目EPG接口为112114.xyz站点分发，本项目无法确保其准确性。
- 通过M3U8 Web Player测试直播源需使用https协议的直播源链接。
- 在线M3U转TXT工具构建在Vercel，不会记录您的访问日志请放心使用。
- TXT转M3U工具为前端网页转换，无需上传文件，粘贴即转换，安全不偷源。
- 本项目不存储任何的流媒体内容，所有的法律责任与后果应由使用者自行承担。
- 项目`/tv/m3u/`和`/radio/m3u/`目录下的内容收集于互联网，仅供测试研究使用，本项目无法保证其有效性。
- 主域名【`live.lizanyang.top`】的WEB访问通过Github Pages自动构建，由CloudFlare提供CDN和安全防护。
- 项目所有文件均托管在[GitHub](https://github.com/lizanyang3/live)且自动构建，由项目发起人公益维护，欢迎Star本项目或点击[Issues](https://github.com/lizanyang3/live/issues/new/choose)反馈您的问题。
- 您可以Frok本项目到您的Github账户，将缺失的频道Logo上传到`tv`或`radio`目录下并发起拉取请求，收到请求后我们会对您提交的内容进行验证，审核通过后会自动为您署名并发布。

## 📱联系
- Telegram: 
  - 如遇资源访问问题请通过Telegram反馈。

## 📔更新
- 2024.2.3
  - 
  - 

