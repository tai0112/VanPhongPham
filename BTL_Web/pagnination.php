<?php
    error_reporting(0);
?>
<nav class="mt-1" aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item"><a class="page-link" href="?per_page=<?php echo $item_per_page ?>&page=1">Previous</a></li>
        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
            <?php if($num != $current_page) {?>
                <li class="page-item"><a class="page-link" href="?per_page=<?php echo $item_per_page ?>&page=<?php echo $num ?>"><?php echo $num ?></a></li>
            <?php }else {?>
                <li class="page-item active"><a class="page-link"><?php echo $num ?></a></li>
            <?php }?>
        <?php } ?>
        <li class="page-item"><a class="page-link" href="?per_page=<?php echo $item_per_page ?>&page=<?php echo  $totalPages ?>">Next</a></li>
    </ul>
</nav>