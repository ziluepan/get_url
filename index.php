<?php
// 目标 URL：raw.githubusercontent.com 上的文件原始地址
$url = 'https://raw.githubusercontent.com/ziluepan/chromego_merge/main/sub/merged_proxies_new.yaml';

// 使用 file_get_contents 来获取远程文件内容
$response = file_get_contents($url);

// 检查是否成功获取内容
if ($response === FALSE) {
    // 如果获取失败，输出错误信息
    header("HTTP/1.1 500 Internal Server Error");
    echo "Error: Unable to retrieve the file.";
} else {
    // 设置合适的头信息以输出 YAML 文件
    header("Content-Type: text/plain");
    header("Content-Disposition: inline; filename=\"merged_proxies_new.yaml\"");
    
    // 输出文件内容
    echo $response;
}
?>




