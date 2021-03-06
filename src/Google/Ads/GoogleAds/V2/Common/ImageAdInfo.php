<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An image ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.ImageAdInfo</code>
 */
class ImageAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Width in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_width = 4;</code>
     */
    protected $pixel_width = null;
    /**
     * Height in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_height = 5;</code>
     */
    protected $pixel_height = null;
    /**
     * URL of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue image_url = 6;</code>
     */
    protected $image_url = null;
    /**
     * Width in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_width = 7;</code>
     */
    protected $preview_pixel_width = null;
    /**
     * Height in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_height = 8;</code>
     */
    protected $preview_pixel_height = null;
    /**
     * URL of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue preview_image_url = 9;</code>
     */
    protected $preview_image_url = null;
    /**
     * The mime type of the image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.MimeTypeEnum.MimeType mime_type = 10;</code>
     */
    protected $mime_type = 0;
    /**
     * The name of the image. If the image was created from a MediaFile, this is
     * the MediaFile's name. If the image was created from bytes, this is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 11;</code>
     */
    protected $name = null;
    protected $image;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $pixel_width
     *           Width in pixels of the full size image.
     *     @type \Google\Protobuf\Int64Value $pixel_height
     *           Height in pixels of the full size image.
     *     @type \Google\Protobuf\StringValue $image_url
     *           URL of the full size image.
     *     @type \Google\Protobuf\Int64Value $preview_pixel_width
     *           Width in pixels of the preview size image.
     *     @type \Google\Protobuf\Int64Value $preview_pixel_height
     *           Height in pixels of the preview size image.
     *     @type \Google\Protobuf\StringValue $preview_image_url
     *           URL of the preview size image.
     *     @type int $mime_type
     *           The mime type of the image.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the image. If the image was created from a MediaFile, this is
     *           the MediaFile's name. If the image was created from bytes, this is empty.
     *     @type \Google\Protobuf\StringValue $media_file
     *           The MediaFile resource to use for the image.
     *     @type \Google\Protobuf\BytesValue $data
     *           Raw image data as bytes.
     *     @type \Google\Protobuf\Int64Value $ad_id_to_copy_image_from
     *           An ad ID to copy the image from.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Width in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_width = 4;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPixelWidth()
    {
        return $this->pixel_width;
    }

    /**
     * Returns the unboxed value from <code>getPixelWidth()</code>

     * Width in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_width = 4;</code>
     * @return int|string|null
     */
    public function getPixelWidthUnwrapped()
    {
        return $this->readWrapperValue("pixel_width");
    }

    /**
     * Width in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_width = 4;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPixelWidth($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->pixel_width = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Width in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_width = 4;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPixelWidthUnwrapped($var)
    {
        $this->writeWrapperValue("pixel_width", $var);
        return $this;}

    /**
     * Height in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_height = 5;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPixelHeight()
    {
        return $this->pixel_height;
    }

    /**
     * Returns the unboxed value from <code>getPixelHeight()</code>

     * Height in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_height = 5;</code>
     * @return int|string|null
     */
    public function getPixelHeightUnwrapped()
    {
        return $this->readWrapperValue("pixel_height");
    }

    /**
     * Height in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_height = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPixelHeight($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->pixel_height = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Height in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_height = 5;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPixelHeightUnwrapped($var)
    {
        $this->writeWrapperValue("pixel_height", $var);
        return $this;}

    /**
     * URL of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue image_url = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Returns the unboxed value from <code>getImageUrl()</code>

     * URL of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue image_url = 6;</code>
     * @return string|null
     */
    public function getImageUrlUnwrapped()
    {
        return $this->readWrapperValue("image_url");
    }

    /**
     * URL of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue image_url = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue image_url = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setImageUrlUnwrapped($var)
    {
        $this->writeWrapperValue("image_url", $var);
        return $this;}

    /**
     * Width in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_width = 7;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPreviewPixelWidth()
    {
        return $this->preview_pixel_width;
    }

    /**
     * Returns the unboxed value from <code>getPreviewPixelWidth()</code>

     * Width in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_width = 7;</code>
     * @return int|string|null
     */
    public function getPreviewPixelWidthUnwrapped()
    {
        return $this->readWrapperValue("preview_pixel_width");
    }

    /**
     * Width in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_width = 7;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPreviewPixelWidth($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->preview_pixel_width = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Width in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_width = 7;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPreviewPixelWidthUnwrapped($var)
    {
        $this->writeWrapperValue("preview_pixel_width", $var);
        return $this;}

    /**
     * Height in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_height = 8;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPreviewPixelHeight()
    {
        return $this->preview_pixel_height;
    }

    /**
     * Returns the unboxed value from <code>getPreviewPixelHeight()</code>

     * Height in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_height = 8;</code>
     * @return int|string|null
     */
    public function getPreviewPixelHeightUnwrapped()
    {
        return $this->readWrapperValue("preview_pixel_height");
    }

    /**
     * Height in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_height = 8;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPreviewPixelHeight($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->preview_pixel_height = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Height in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_height = 8;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPreviewPixelHeightUnwrapped($var)
    {
        $this->writeWrapperValue("preview_pixel_height", $var);
        return $this;}

    /**
     * URL of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue preview_image_url = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPreviewImageUrl()
    {
        return $this->preview_image_url;
    }

    /**
     * Returns the unboxed value from <code>getPreviewImageUrl()</code>

     * URL of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue preview_image_url = 9;</code>
     * @return string|null
     */
    public function getPreviewImageUrlUnwrapped()
    {
        return $this->readWrapperValue("preview_image_url");
    }

    /**
     * URL of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue preview_image_url = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPreviewImageUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->preview_image_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue preview_image_url = 9;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPreviewImageUrlUnwrapped($var)
    {
        $this->writeWrapperValue("preview_image_url", $var);
        return $this;}

    /**
     * The mime type of the image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.MimeTypeEnum.MimeType mime_type = 10;</code>
     * @return int
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * The mime type of the image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.MimeTypeEnum.MimeType mime_type = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\MimeTypeEnum_MimeType::class);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * The name of the image. If the image was created from a MediaFile, this is
     * the MediaFile's name. If the image was created from bytes, this is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * The name of the image. If the image was created from a MediaFile, this is
     * the MediaFile's name. If the image was created from bytes, this is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 11;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * The name of the image. If the image was created from a MediaFile, this is
     * the MediaFile's name. If the image was created from bytes, this is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the image. If the image was created from a MediaFile, this is
     * the MediaFile's name. If the image was created from bytes, this is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 11;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * The MediaFile resource to use for the image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMediaFile()
    {
        return $this->readOneof(1);
    }

    /**
     * Returns the unboxed value from <code>getMediaFile()</code>

     * The MediaFile resource to use for the image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     * @return string|null
     */
    public function getMediaFileUnwrapped()
    {
        return $this->readWrapperValue("media_file");
    }

    /**
     * The MediaFile resource to use for the image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMediaFile($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The MediaFile resource to use for the image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setMediaFileUnwrapped($var)
    {
        $this->writeWrapperValue("media_file", $var);
        return $this;}

    /**
     * Raw image data as bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 2;</code>
     * @return \Google\Protobuf\BytesValue
     */
    public function getData()
    {
        return $this->readOneof(2);
    }

    /**
     * Returns the unboxed value from <code>getData()</code>

     * Raw image data as bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 2;</code>
     * @return string|null
     */
    public function getDataUnwrapped()
    {
        return $this->readWrapperValue("data");
    }

    /**
     * Raw image data as bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 2;</code>
     * @param \Google\Protobuf\BytesValue $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BytesValue::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BytesValue object.

     * Raw image data as bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDataUnwrapped($var)
    {
        $this->writeWrapperValue("data", $var);
        return $this;}

    /**
     * An ad ID to copy the image from.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_id_to_copy_image_from = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getAdIdToCopyImageFrom()
    {
        return $this->readOneof(3);
    }

    /**
     * Returns the unboxed value from <code>getAdIdToCopyImageFrom()</code>

     * An ad ID to copy the image from.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_id_to_copy_image_from = 3;</code>
     * @return int|string|null
     */
    public function getAdIdToCopyImageFromUnwrapped()
    {
        return $this->readWrapperValue("ad_id_to_copy_image_from");
    }

    /**
     * An ad ID to copy the image from.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_id_to_copy_image_from = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAdIdToCopyImageFrom($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * An ad ID to copy the image from.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_id_to_copy_image_from = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setAdIdToCopyImageFromUnwrapped($var)
    {
        $this->writeWrapperValue("ad_id_to_copy_image_from", $var);
        return $this;}

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->whichOneof("image");
    }

}

