<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * AppBundle\Document\Stats
 *
 * @ODM\Document(collection="stats")
 * @ODM\ChangeTrackingPolicy("DEFERRED_IMPLICIT")
 */
class Stats
{
    /**
     * @var MongoId $id
     *
     * @ODM\Id(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer $installRateReceived
     *
     * @ODM\Field(name="installRateReceived", type="integer")
     */
    protected $installRateReceived;

    
    /**
     * @var string $adTypeId
     *
     * @ODM\Field(name="adTypeId", type="string")
     */
    protected $adTypeId;

    /**
     * @var string $dt
     *
     * @ODM\Field(name="dt", type="string")
     */
    protected $dt;

    /**
     * @var string $campaignSubType
     *
     * @ODM\Field(name="campaignSubType", type="string")
     */
    protected $campaignSubType;

    /**
     * @var string $role
     *
     * @ODM\Field(name="role", type="string")
     */
    protected $role;

    /**
     * @var integer $ctrReceived
     *
     * @ODM\Field(name="ctrReceived", type="integer")
     */
    protected $ctrReceived;

    /**
     * @var string $campaign
     *
     * @ODM\Field(name="campaign", type="string")
     */
    protected $campaign;

    /**
     * @var integer $impressionsDelivered
     *
     * @ODM\Field(name="impressionsDelivered", type="integer")
     */
    protected $impressionsDelivered;

    /**
     * @var integer $cpcvSpent
     *
     * @ODM\Field(name="cpcvSpent", type="integer")
     */
    protected $cpcvSpent;

    /**
     * @var integer $impressionsReceived
     *
     * @ODM\Field(name="impressionsReceived", type="integer")
     */
    protected $impressionsReceived;

    /**
     * @var string $creative
     *
     * @ODM\Field(name="creative", type="string")
     */
    protected $creative;

    /**
     * @var integer $installReceived
     *
     * @ODM\Field(name="installReceived", type="integer")
     */
    protected $installReceived;

    /**
     * @var integer $ecpmSpent
     *
     * @ODM\Field(name="ecpmSpent", type="integer")
     */
    protected $ecpmSpent;

    /**
     * @var integer $moneySpent
     *
     * @ODM\Field(name="moneySpent", type="integer")
     */
    protected $moneySpent;

    /**
     * @var integer $clicksDelivered
     *
     * @ODM\Field(name="clicksDelivered", type="integer")
     */
    protected $clicksDelivered;

    /**
     * @var string $campaignTarget
     *
     * @ODM\Field(name="campaignTarget", type="string")
     */
    protected $campaignTarget;

    /**
     * @var float $ecpmEarned
     *
     * @ODM\Field(name="ecpmEarned", type="float")
     */
    protected $ecpmEarned;

    /**
     * @var integer $videoCompletedDelivered
     *
     * @ODM\Field(name="videoCompletedDelivered", type="integer")
     */
    protected $videoCompletedDelivered;

    /**
     * @var integer $clicksReceived
     *
     * @ODM\Field(name="clicksReceived", type="integer")
     */
    protected $clicksReceived;

    /**
     * @var integer $videoCompletedReceived
     *
     * @ODM\Field(name="videoCompletedReceived", type="integer")
     */
    protected $videoCompletedReceived;

    /**
     * @var string $campaignId
     *
     * @ODM\Field(name="campaignId", type="string")
     */
    protected $campaignId;

    /**
     * @var float $moneyEarned
     *
     * @ODM\Field(name="moneyEarned", type="float")
     */
    protected $moneyEarned;

    /**
     * @var integer $cpcvEarned
     *
     * @ODM\Field(name="cpcvEarned", type="integer")
     */
    protected $cpcvEarned;

    /**
     * @var string $campaignType
     *
     * @ODM\Field(name="campaignType", type="string")
     */
    protected $campaignType;

    /**
     * @var integer $installDelivered
     *
     * @ODM\Field(name="installDelivered", type="integer")
     */
    protected $installDelivered;

    /**
     * @var float $installRateDelivered
     *
     * @ODM\Field(name="installRateDelivered", type="float")
     */
    protected $installRateDelivered;

    /**
     * @var float $ctrDelivered
     *
     * @ODM\Field(name="ctrDelivered", type="float")
     */
    protected $ctrDelivered;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set installRateReceived
     *
     * @param integer $installRateReceived
     * @return self
     */
    public function setInstallRateReceived($installRateReceived)
    {
        $this->installRateReceived = $installRateReceived;
        return $this;
    }

    /**
     * Get installRateReceived
     *
     * @return integer $installRateReceived
     */
    public function getInstallRateReceived()
    {
        return $this->installRateReceived;
    }

    /**
     * Set adTypeId
     *
     * @param string $adTypeId
     * @return self
     */
    public function setAdTypeId($adTypeId)
    {
        $this->adTypeId = $adTypeId;
        return $this;
    }

    /**
     * Get adTypeId
     *
     * @return string $adTypeId
     */
    public function getAdTypeId()
    {
        return $this->adTypeId;
    }

    /**
     * Set dt
     *
     * @param string $dt
     * @return self
     */
    public function setDt($dt)
    {
        $this->dt = $dt;
        return $this;
    }

    /**
     * Get dt
     *
     * @return string $dt
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Set campaignSubType
     *
     * @param string $campaignSubType
     * @return self
     */
    public function setCampaignSubType($campaignSubType)
    {
        $this->campaignSubType = $campaignSubType;
        return $this;
    }

    /**
     * Get campaignSubType
     *
     * @return string $campaignSubType
     */
    public function getCampaignSubType()
    {
        return $this->campaignSubType;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Get role
     *
     * @return string $role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set ctrReceived
     *
     * @param integer $ctrReceived
     * @return self
     */
    public function setCtrReceived($ctrReceived)
    {
        $this->ctrReceived = $ctrReceived;
        return $this;
    }

    /**
     * Get ctrReceived
     *
     * @return integer $ctrReceived
     */
    public function getCtrReceived()
    {
        return $this->ctrReceived;
    }

    /**
     * Set campaign
     *
     * @param string $campaign
     * @return self
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * Get campaign
     *
     * @return string $campaign
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set impressionsDelivered
     *
     * @param integer $impressionsDelivered
     * @return self
     */
    public function setImpressionsDelivered($impressionsDelivered)
    {
        $this->impressionsDelivered = $impressionsDelivered;
        return $this;
    }

    /**
     * Get impressionsDelivered
     *
     * @return integer $impressionsDelivered
     */
    public function getImpressionsDelivered()
    {
        return $this->impressionsDelivered;
    }

    /**
     * Set cpcvSpent
     *
     * @param integer $cpcvSpent
     * @return self
     */
    public function setCpcvSpent($cpcvSpent)
    {
        $this->cpcvSpent = $cpcvSpent;
        return $this;
    }

    /**
     * Get cpcvSpent
     *
     * @return integer $cpcvSpent
     */
    public function getCpcvSpent()
    {
        return $this->cpcvSpent;
    }

    /**
     * Set impressionsReceived
     *
     * @param integer $impressionsReceived
     * @return self
     */
    public function setImpressionsReceived($impressionsReceived)
    {
        $this->impressionsReceived = $impressionsReceived;
        return $this;
    }

    /**
     * Get impressionsReceived
     *
     * @return integer $impressionsReceived
     */
    public function getImpressionsReceived()
    {
        return $this->impressionsReceived;
    }

    /**
     * Set creative
     *
     * @param string $creative
     * @return self
     */
    public function setCreative($creative)
    {
        $this->creative = $creative;
        return $this;
    }

    /**
     * Get creative
     *
     * @return string $creative
     */
    public function getCreative()
    {
        return $this->creative;
    }

    /**
     * Set installReceived
     *
     * @param integer $installReceived
     * @return self
     */
    public function setInstallReceived($installReceived)
    {
        $this->installReceived = $installReceived;
        return $this;
    }

    /**
     * Get installReceived
     *
     * @return integer $installReceived
     */
    public function getInstallReceived()
    {
        return $this->installReceived;
    }

    /**
     * Set ecpmSpent
     *
     * @param integer $ecpmSpent
     * @return self
     */
    public function setEcpmSpent($ecpmSpent)
    {
        $this->ecpmSpent = $ecpmSpent;
        return $this;
    }

    /**
     * Get ecpmSpent
     *
     * @return integer $ecpmSpent
     */
    public function getEcpmSpent()
    {
        return $this->ecpmSpent;
    }

    /**
     * Set moneySpent
     *
     * @param integer $moneySpent
     * @return self
     */
    public function setMoneySpent($moneySpent)
    {
        $this->moneySpent = $moneySpent;
        return $this;
    }

    /**
     * Get moneySpent
     *
     * @return integer $moneySpent
     */
    public function getMoneySpent()
    {
        return $this->moneySpent;
    }

    /**
     * Set clicksDelivered
     *
     * @param integer $clicksDelivered
     * @return self
     */
    public function setClicksDelivered($clicksDelivered)
    {
        $this->clicksDelivered = $clicksDelivered;
        return $this;
    }

    /**
     * Get clicksDelivered
     *
     * @return integer $clicksDelivered
     */
    public function getClicksDelivered()
    {
        return $this->clicksDelivered;
    }

    /**
     * Set campaignTarget
     *
     * @param string $campaignTarget
     * @return self
     */
    public function setCampaignTarget($campaignTarget)
    {
        $this->campaignTarget = $campaignTarget;
        return $this;
    }

    /**
     * Get campaignTarget
     *
     * @return string $campaignTarget
     */
    public function getCampaignTarget()
    {
        return $this->campaignTarget;
    }

    /**
     * Set ecpmEarned
     *
     * @param float $ecpmEarned
     * @return self
     */
    public function setEcpmEarned($ecpmEarned)
    {
        $this->ecpmEarned = $ecpmEarned;
        return $this;
    }

    /**
     * Get ecpmEarned
     *
     * @return float $ecpmEarned
     */
    public function getEcpmEarned()
    {
        return $this->ecpmEarned;
    }

    /**
     * Set videoCompletedDelivered
     *
     * @param integer $videoCompletedDelivered
     * @return self
     */
    public function setVideoCompletedDelivered($videoCompletedDelivered)
    {
        $this->videoCompletedDelivered = $videoCompletedDelivered;
        return $this;
    }

    /**
     * Get videoCompletedDelivered
     *
     * @return integer $videoCompletedDelivered
     */
    public function getVideoCompletedDelivered()
    {
        return $this->videoCompletedDelivered;
    }

    /**
     * Set clicksReceived
     *
     * @param integer $clicksReceived
     * @return self
     */
    public function setClicksReceived($clicksReceived)
    {
        $this->clicksReceived = $clicksReceived;
        return $this;
    }

    /**
     * Get clicksReceived
     *
     * @return integer $clicksReceived
     */
    public function getClicksReceived()
    {
        return $this->clicksReceived;
    }

    /**
     * Set videoCompletedReceived
     *
     * @param integer $videoCompletedReceived
     * @return self
     */
    public function setVideoCompletedReceived($videoCompletedReceived)
    {
        $this->videoCompletedReceived = $videoCompletedReceived;
        return $this;
    }

    /**
     * Get videoCompletedReceived
     *
     * @return integer $videoCompletedReceived
     */
    public function getVideoCompletedReceived()
    {
        return $this->videoCompletedReceived;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     * @return self
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * Get campaignId
     *
     * @return string $campaignId
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set moneyEarned
     *
     * @param float $moneyEarned
     * @return self
     */
    public function setMoneyEarned($moneyEarned)
    {
        $this->moneyEarned = $moneyEarned;
        return $this;
    }

    /**
     * Get moneyEarned
     *
     * @return float $moneyEarned
     */
    public function getMoneyEarned()
    {
        return $this->moneyEarned;
    }

    /**
     * Set cpcvEarned
     *
     * @param integer $cpcvEarned
     * @return self
     */
    public function setCpcvEarned($cpcvEarned)
    {
        $this->cpcvEarned = $cpcvEarned;
        return $this;
    }

    /**
     * Get cpcvEarned
     *
     * @return integer $cpcvEarned
     */
    public function getCpcvEarned()
    {
        return $this->cpcvEarned;
    }

    /**
     * Set campaignType
     *
     * @param string $campaignType
     * @return self
     */
    public function setCampaignType($campaignType)
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * Get campaignType
     *
     * @return string $campaignType
     */
    public function getCampaignType()
    {
        return $this->campaignType;
    }

    /**
     * Set installDelivered
     *
     * @param integer $installDelivered
     * @return self
     */
    public function setInstallDelivered($installDelivered)
    {
        $this->installDelivered = $installDelivered;
        return $this;
    }

    /**
     * Get installDelivered
     *
     * @return integer $installDelivered
     */
    public function getInstallDelivered()
    {
        return $this->installDelivered;
    }

    /**
     * Set installRateDelivered
     *
     * @param float $installRateDelivered
     * @return self
     */
    public function setInstallRateDelivered($installRateDelivered)
    {
        $this->installRateDelivered = $installRateDelivered;
        return $this;
    }

    /**
     * Get installRateDelivered
     *
     * @return float $installRateDelivered
     */
    public function getInstallRateDelivered()
    {
        return $this->installRateDelivered;
    }

    /**
     * Set ctrDelivered
     *
     * @param float $ctrDelivered
     * @return self
     */
    public function setCtrDelivered($ctrDelivered)
    {
        $this->ctrDelivered = $ctrDelivered;
        return $this;
    }

    /**
     * Get ctrDelivered
     *
     * @return float $ctrDelivered
     */
    public function getCtrDelivered()
    {
        return $this->ctrDelivered;
    }
}
