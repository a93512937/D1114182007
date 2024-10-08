<?php
    $rowspan = isset($_GET['row_num']) ? $_GET['row_num'] : 0;
    $colspan = isset($_GET['col_num']) ? $_GET['col_num'] : 0;
    $gender = isset($_GET['gender']) ? $_GET['gender'] : '其他';
    $dept = isset($_GET['dept']) ? $_GET['dept'] : '未選擇';
    $message = isset($_GET['message']) ? $_GET['message'] : '無留言';

    // 修正输出格式
    echo '表格大小: ' . $rowspan . '行, ' . $colspan . '列, 性別: ' . ($gender === 'M' ? '男生' : ($gender === 'F' ? '女生' : '其他')) . '<br/>';
    echo '科系: ' . ($dept === 'ee' ? '電機工程系' : ($dept === 'csie' ? '資訊工程系' : '機械工程系')) . '<br/>';
    echo '留言: ' . $message . '<br/><br/>';

    // 生成表格
    echo '<table border="1" style="width: 100%">';
    for ($rowX = 0; $rowX < $rowspan; $rowX++) {
        echo '<tr>';
        for ($colX = 0; $colX < $colspan; $colX++) {
            echo '<td>行' . ($rowX + 1) . '列' . ($colX + 1) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>
