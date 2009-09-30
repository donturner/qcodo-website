<?php
	require('../includes/prepend.inc.php');

	$strPath = WikiItem::SanitizeForPath(QApplication::PathInfo(0), $intWikiItemTypeId);
	$objWikiItem = WikiItem::LoadByPathWikiItemTypeId($strPath, WikiItemType::Image);

	if ($objWikiItem) {
		$objWikiImage = $objWikiItem->CurrentWikiVersion->WikiImage;

		if (!file_exists($objWikiImage->GetThumbPath())) {
			$objImageControl = new QImageControl(null);
			$objImageControl->ImagePath = $objWikiImage->GetPath();
			$objImageControl->Width = 240;
			$objImageControl->Height = 240;
			$objImageControl->ScaleCanvasDown = true;
			$objImageControl->RenderImage($objWikiImage->GetThumbPath());
		}

		header('Content-Type: image/jpeg');
		header('Content-Length: ' . filesize($objWikiImage->GetThumbPath()));
		print(file_get_contents($objWikiImage->GetThumbPath()));
	} else {
		$strImagePath = __DOCROOT__ . '/images/no_image.png';
		header('Content-Type: image/png');
		header('Content-Length: ' . filesize($strImagePath));
		print(file_get_contents($strImagePath));
	}
?>