<?php require(__INCLUDES__ . '/header.inc.php'); ?>

	<div class="searchBar">
		<div class="title">Bugs and Issues</div>
		<div class="right">
			<?php // $this->txtSearch->Render(); ?>
		</div>
		<div class="right">
			<?php // $this->btnSearchAll->Render(); ?>
		</div>
		<div class="right">
			<?php // $this->btnSearchThis->Render(); ?>
		</div>
	</div>

	<div style="float: left;">
		<?php $this->pnlDetails->Render(); ?>
		<?php $this->pnlVotes->Render(); ?>

		<?php $this->pnlExampleCode->Render(); ?>
		<?php $this->pnlExampleTemplate->Render(); ?>
		<?php $this->pnlExampleData->Render(); ?>
		<?php $this->pnlExpectedOutput->Render(); ?>
		<?php $this->pnlActualOutput->Render(); ?>
	</div>

	<?php $this->pnlMessages->Render(); ?>

<?php require(__INCLUDES__ . '/footer.inc.php'); ?>