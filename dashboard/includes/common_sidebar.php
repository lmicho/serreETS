<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li <?php if ($pageDashboard) { ?> class="active" <?php } ?>>
            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li <?php if ($pageCharts) { ?> class="active" <?php } ?>>
            <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
        </li>
        <li <?php if ($pageTable) { ?> class="active" <?php } ?>>
            <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <!--li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
                <li>
                    <a href="#">Dropdown Item</a>
                </li>
            </ul>
        </li-->
    </ul>
</div>