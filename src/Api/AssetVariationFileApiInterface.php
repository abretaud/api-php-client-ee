<?php

namespace Akeneo\PimEnterprise\ApiClient\Api;

use Psr\Http\Message\StreamInterface;

/**
 * API to manage asset variation files.
 *
 * @author    Laurent Petard <laurent.petard@akeneo.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface AssetVariationFileApiInterface
{
    /**
     * Available since Akeneo PIM 2.1.
     * Gets an asset variation file by its asset code, channel code and local code for a localizable asset.
     *
     * @param string $assetCode   code of the asset
     * @param string $channelCode code of the channel
     * @param string $localeCode  code of the locale
     *
     * @return array
     */
    public function getFromLocalizableAsset($assetCode, $channelCode, $localeCode);

    /**
     * Available since Akeneo PIM 2.1.
     * Gets an asset variation file by its asset code and channel code for a not localizable asset.
     *
     * @param string $assetCode   code of the asset
     * @param string $channelCode code of the channel
     *
     * @return array
     */
    public function getFromNotLocalizableAsset($assetCode, $channelCode);

    /**
     * Available since Akeneo PIM 2.1.
     * Uploads a new variation file for a given localizable asset, channel and locale.
     *
     * @param string|resource $variationFile file path or resource of the variation file to upload
     * @param string          $assetCode     code of the asset
     * @param string          $channelCode   code of the channel
     * @param string          $localeCode    code of the locale
     *
     * @return int Status code 201 indicating that the asset variation file has been well uploaded
     */
    public function uploadForLocalizableAsset($variationFile, $assetCode, $channelCode, $localeCode);

    /**
     * Available since Akeneo PIM 2.1.
     * Uploads a new variation file for a given not localizable asset and channel.
     *
     * @param string|resource $variationFile file path or resource of the variation file to upload
     * @param string          $assetCode     code of the asset
     * @param string          $channelCode   code of the channel
     *
     * @return int Status code 201 indicating that the asset variation file has been well uploaded
     */
    public function uploadForNotLocalizableAsset($variationFile, $assetCode, $channelCode);

    /**
     * Available since Akeneo PIM 2.1.
     * Downloads an asset variation file by its asset code, channel code and local code for a localizable asset.
     *
     * @param string $assetCode   code of the asset
     * @param string $channelCode code of the channel
     * @param string $localeCode  code of the locale
     *
     * @return StreamInterface
     */
    public function downloadFromLocalizableAsset($assetCode, $channelCode, $localeCode);

    /**
     * Available since Akeneo PIM 2.1.
     * Downloads an asset variation file by its asset code and channel code for a not localizable asset.
     *
     * @param string $assetCode   code of the asset
     * @param string $channelCode code of the channel
     *
     * @return StreamInterface
     */
    public function downloadFromNotLocalizableAsset($assetCode, $channelCode);
}
