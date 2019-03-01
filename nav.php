
            <?php if(logged_in()):?>
            

          <div id="adminbut">
            <li><a href="CharityDashboard/index.php">Admin Dashboard</a></li>
            
            <br>


            <li><a href="logout.php">Logout</a></li>
            </div>

            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <style>

    #adminbut {
      text-align:right;
      margin-right:20px;
      color: red;
    }
    </style>
