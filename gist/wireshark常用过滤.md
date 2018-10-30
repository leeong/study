1. protocol过滤：
    * tcp
    * udp
    * arp
    * icmp
    * http
    * smtp
    * ftp
    * dns
    * msnms
    * ip
    * ssl
    * oicq
    * bootp

1. mac过滤：
    * eth.dst == A0:00:00:04:C5:84
    * eth.src eq A0:00:00:04:C5:84
    * eth.dst==A0:00:00:04:C5:84
    * eth.dst==A0-00-00-04-C5-84

2. ip过滤：
    * ip.addr == 10.43.54.65
     
    > // 常量的研究两者间的通信
    * ip.addr== 192.168.8.54 || ip.addr== 112.80.248.74
    * ip.src == 10.43.54.65 or ip.dst == 10.43.54.65

3. tcp和udp过滤：
    * tcp.port == 80
    * tcp.port eq 80 or udp.port eq 80
    * tcp.port eq 25 or icmp
    * tcp.port >= 1 and tcp.port <= 80
    * tcp.window_size == 0 && tcp.flags.reset != 1
    * udp.length == 26

    > tcp类型和内容：
    * tcp[13] & 0×00 = 0: No flags set (null scan)
    * tcp[13] & 0×01 = 1: FIN set and ACK not set
    * tcp[13] & 0×03 = 3: SYN set and FIN set
    * tcp[13] & 0×05 = 5: RST set and FIN set
    * tcp[13] & 0×06 = 6: SYN set and RST set
    * tcp[13] & 0×08 = 8: PSH set and ACK not set

    > 包长过滤：
    * udp.length == 26 这个长度是指udp本身固定长度8加上udp下面那块数据包之和
    * tcp.len >= 7  指的是ip数据包(tcp下面那块数据),不包括tcp本身
    * ip.len == 94 除了以太网头固定长度14,其它都算是ip.len,即从ip本身到最后
    * frame.len == 119 整个数据包长度,从eth开始到最后

4. http过滤：
    * http.host == party.syyx.com
    * http.response.code == 404
    * http.content_type contains "javascript"
    * http.request.uri matches "gl=se$"
    * http.request.method == "GET"
    * http.request.method == "POST"
    * http.request.uri == "/img/logo-edu.gif"
    * http contains "GET"
    * http contains "HTTP/1."

    >  GET包
    * http.request.method == "GET" && http contains "Host: "
    * http.request.method == "GET" && http contains "User-Agent: "
    > POST包
    * http.request.method == "POST" && http contains "Host: "
    * http.request.method == "POST" && http contains "User-Agent: "
    > 响应包
    * http contains "HTTP/1.1 200 OK" && http contains "Content-Type: "
    * http contains "HTTP/1.0 200 OK" && http contains "Content-Type: "
