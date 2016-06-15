<?php include('include/header.php'); ?>
     <?php include('include/sidebar.php') ; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Contract
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

       

        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i><?php echo $contract->contracts_no;?>
                <small class="pull-right">Date: <?php echo $contract->contracts_date;?></small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
            <strong> Tender Ref No:</strong>  <?php echo $contract->tendor_code;?><br/><br/>
             <strong> Tender Date:</strong>  <?php echo $contract->tendor_date;?><br/><br/>
              <strong> Nature of Work:</strong>  <?php echo $contract->nature_work;?><br/><br/>
               <strong>Mode of Enquiry:</strong>  <?php echo $contract->mode_tendor_enquiry;?><br/><br/>
                <strong>  Date of Publication:</strong>  <?php echo $contract->date_of_publication;?><br/><br/>
                 <strong> Type of Bidding(Single/Two bid system):</strong>  <?php echo $contract->type_bidding;?><br/><br/>
                  <strong> Last Date of Reciept of Tender:</strong>  <?php echo $contract->due_date_tendor;?><br/><br/>
                   <strong>Contract Ref No:</strong>  <?php echo $contract->contracts_no;?><br/><br/>
                <strong>  Contract Ref Date:</strong>  <?php echo $contract->contracts_date;?><br/><br/>
                 <strong> Name of Contractor:</strong>  <?php echo $contract->name_of_contractor;?><br/><br/>
                  <strong>Contract value(in Rs):</strong>  <?php echo $contract->value_of_contractor;?><br/><br/>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
               <strong> No Of Tender Recived:</strong>  <?php echo $contract->no_of_tendor;?><br/><br/>
             <strong> No Of  Parties qualified after techinal evaluation:</strong>  <?php echo $contract->no_of_parties;?><br/><br/>
              <strong> Name Of Parties qualified after techinal evaluation:</strong>  <?php echo $contract->name_of_parties;?><br/><br/>
               <strong> No Of  Parties not qualified after techinal evaluation:</strong>  <?php echo $contract->no_of_n_parties;?><br/><br/>
                <strong> Name Of Parties not  qualified after techinal evaluation:</strong>  <?php echo $contract->name_of_n_parties;?><br/><br/>
                 <strong> Whether Contract awarded to lowest tender/Evaluated LI:</strong>  <?php echo $contract->contracta_awared;?><br/><br/>
                  
            </div><!-- /.col -->
           
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
             
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            
            <div class="col-xs-6">
              
              <div class="table-responsive">
               
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            
          </div>
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
     <?php include('include/footer.php'); ?>