<?php

/**
 * This file is part of the guanguans/music-dl.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

return [
    'table_header' => [
        'serial_number' => '<fg=green;options=bold>序号</>',
        'name' => '<fg=green;options=bold>歌名</>',
        'artist' => '<fg=green;options=bold>歌手</>',
        'album' => '<fg=green;options=bold>专辑</>',
        'source' => '<fg=green;options=bold>来源</>',
        'size' => '<fg=green;options=bold>大小</>',
        'br' => '<fg=green;options=bold>比特率</>',
    ],

    'search_tip' => '请输入要关键字如：<info>一个短篇  腰乐队  Yesterday once more</info>，或<info>Ctrl+C</info>退出',
    'win_tip' => '<fg=yellow>CMD、PowerShell 仅支持英文搜索，Git Bash 支持中英文搜索</>',
    'splitter' => '------------------------------',
    'input' => '>>: ',
    'searching' => '正在搜索：<info>%s</info>，请耐心等待...',
    'downloading' => '正在下载中...',
    'empty_result' => '<fg=yellow>o(╥﹏╥)o 没有搜索到相关歌曲</>',
    'download_tip' => '请输入下载序号，多个用英文逗号隔开如：<info>0,6</info>，输入<info>ALL</info>下载全部，输入<info>N</info>跳过下载',
    'input_error' => '<fg=red>o(╥﹏╥)o 输入错误</>',
    'save_path' => '已保存到：<info>%s%s - %s.mp3</info>，请前往查看',
    'icon_success' => __DIR__.'/../resources/icon-success.png',

    'logo' => '<fg=green;options=bold>
         __  __           _        _____  _      
        |  \/  |         (_)      |  __ \| |     
        | \  / |_   _ ___ _  ___  | |  | | |     
        | |\/| | | | / __| |/ __| | |  | | |     
        | |  | | |_| \__ \ | (__  | |__| | |____ 
        |_|  |_|\__,_|___/_|\___| |_____/|______|                                       
    </>',
];
