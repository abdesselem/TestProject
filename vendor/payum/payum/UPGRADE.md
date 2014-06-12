# Upgrades

## 0.8.5 to 0.8.6

* [Security] Second argument of `GenericTokenFactory::createNotifyToken` is option now.

## 0.7 to 0.8

* [Registry] `Registry::registerStorageExtensions` method was removed. the logic of the method is done internally.

## 0.6 to 0.7

* [Composer] All repositories were merged to `payum\payum` one. If you need only core change it to `payum\core`
* All classes they were previously in `Payum` namespace moved to `Payum\Core` one.
* `PaymentRegistryInterface::getPayments` method is added.
* `PaymentInterface::addApi` method signature was changed. Now it takes second argument `forcePrepend`.
* [Be2Bill][Doctrine] `Payum\Be2Bill\Bridge\Doctrine\Entity\PaymentDetails` is removed.
* [Be2Bill][Model] `Payum\Be2Bill\Model\PaymentDetails` is removed.
* [Payex][Doctrine] `Payum\Payex\Bridge\Doctrine\Entity\PaymentDetails` is removed.
* [Payex][Doctrine] `Payum\Payex\Bridge\Doctrine\Entity\AgreementDetails` is removed.
* [Payex][Model] `Payum\Payex\Model\PaymentDetails` is removed.
* [Payex][Model] `Payum\Payex\Model\AgreementDetails` is removed.
* [AuthorizeNet][Model] `Payum\AuthorizeNet\Aim\Model\PaymentDetails` is removed.
* [Paypal ExpressCheckout][Model] `BaseModel` was removed.
* [Paypal ExpressCheckout][Model] `Payum\Paypal\ExpressCheckout\Nvp\Model\PaymentDetails` was removed.
* [Paypal ExpressCheckout][Model] `Payum\Paypal\ExpressCheckout\Nvp\Model\RecurringPaymentDetails` was removed.
* [Paypal ExpressCheckout][Doctrine] `Payum\Paypal\ExpressCheckout\Nvp\Bridge\Doctrine\Entity\PaymentDetails` was removed.
* [Paypal ExpressCheckout][Doctrine] `Payum\Paypal\ExpressCheckout\Nvp\Bridge\Doctrine\Entity\RecurringPaymentDetails` was removed.
* [Paypal ExpressCheckout][Doctrine] `Payum\Paypal\ExpressCheckout\Nvp\Bridge\Doctrine\Document\PaymentDetails` was removed.
* [Paypal ExpressCheckout][Doctrine] `Payum\Paypal\ExpressCheckout\Nvp\Bridge\Doctrine\Document\RecurringPaymentDetails` was removed.

## 0.6.2 to 0.6.3

* [Storage] `AbstractStorage::findModelByIdentificator` does more strict model class comparison now. Only same classes are allowed. Subclasses not allowed any more.

## 0.5 to 0.6

* [Doctrine] `TokenizedDetails` mapping schema was updated. details field is now accept `NULL`.
* [Doctrine] `TokenizedDetails` entity was deprecated use `Token` instead.
* [Doctrine] `TokenizedDetails` mapping changed. The field `token` was renamed to `hash`.
* [Model] `TokenizedDetails::token` property was removed use `hash` one instead.
* [Security] `Random` class was moved to `Payum\Security` namespace.
* [Security] `TokenizedDetails` model was deprecated use `Token` instead.
* [Security] The default token generated in `TokenizedDetails::__constructor` not include `time()` any more.
* [Storage] The method `Storage::supportModel` accepts only model object. Support of model class was removed.
* [Storage] The method `Storage::findModelByIdentificator` was added to storage interface.
* [Request] `CaptureTokenizedDetailsRequest` was deprecated use `SecuredCaptureRequest` instead.
* [Request] `NotifyTokenizedDetailsRequest` was deprecated use `SecuredNotifyRequest` instead.

## 0.4 to 0.5

* A method `getIdentificator` was added to `StorageInterface` interface.
* `StorageExtension` not using scalar as model id any more. Use `Identificator` object instead.
* [Paypal ExpressCheckout][Doctrine] `PaymentDetails` mapping schema was updated. Two fields added: `returnurl`, `cancelurl`.

## 0.3 to 0.4

* Method `StatusInterface::markInProgress` renamed to `StatusInterface::markPending`
* Method `StatusInterface::isInProgress` renamed to `StatusInterface::isPending`
* `StatusInterface` introduce two new statuses: `expired` and `suspended`.
* `BinaryMaskStatusRequest::STATUS_IN_PROGRESS` renamed to `BinaryMaskStatusRequest::STATUS_PENDING`
* `PaymentInstructionAggregateInterface` class renamed to `DetailsAggregateInterface`
* `DetailsAggregateInterface` class moved to `Payum\Model` namespace
* `DetailsAggregateInterface::getPaymentInstruction` renamed to `DetailsAggregateInterface::getDetails`
* `PaymentInstructionAwareInterface` class renamed to `DetailsAwareInterface`
* `DetailsAwareInterface` class moved to `Payum\Model` namespace
* `DetailsAwareInterface::setPaymentInstruction` renamed to `DetailsAwareInterface::setDetails`
* `ActionApiAwareInterface` interface was deleted. Use combination of `ActionInterface` and `ApiAwareInterface` instead.
* `ActionPaymentAwareInterface` interface was deleted. Use combination og `ActionInterface` and `PaymentAwareInterface` instead.
* Action `ActionPaymentAware` was renamed to `PaymentAwareAction`.
* Exception `HttpResponseStatusNotSuccessfulException` was removed. Use `HttpException` instead.
* `HttpException` constructor signature changed. Now it is like any other basic exception.
* [Authorize.Net AIM] `PaymentInstruction` was renamed to `PaymentDetails` and moved to `Model` namespace.
* [Be2Bill] `PaymentInstruction` model was renamed to `PaymentDetails` and moved to `Model` namespace.
* [Be2Bill][Doctrine]`PaymentInstruction` entity was renamed to `PaymentDetails`.
* [Paypal ExpressCheckout] `PaymentInstruction` was renamed to `PaymentDetails` and moved to `Model` namespace.
* [Paypal ExpressCheckout][Doctrine] `PaymentDetails` mapping schema was updated. Two fields added: `l_billingtypennn`, `l_billingagreementdescriptionnnn`
* [Paypal ProCheckout] `PaymentInstruction` model was renamed to `PaymentDetails` and moved to `Model` namespace.

## 0.2 to 0.3

* The `Payment::execute` method signature changed. Now you have to explicitly set when to catch interactive requests or not.
* `InteractiveRequest` renamed to `BaseInteractiveRequest`.
* A method `supportModel` was added to `StorageInterface`.
* `NullStorage` was removed.
* [Authorize.Net AIM] Remove `fillRequest` method from `PaymentInstruction`.
* [Authorize.Net AIM] Remove `updateFromResponse` method from `PaymentInstruction`.
* [Authorize.Net AIM] `Payment` class was removed use `Payum\Payment` instead.
* [Be2Bill] Remove `toParams` and `fromParams` from `PaymentInstruction` class.
* [Be2Bill] `Payment` class was removed use `Payum\Payment` instead.
* [Paypal ExpressCheckout] Remove `toNvp` and `fromNvp` from `PaymentInstruction` class.
* [Paypal ExpressCheckout] `Payment` class was removed use `Payum\Payment` instead.

## 0.1 to 0.2

* `ModelInterface` interface was removed.
* `PaymentInstructionInterface` interface was removed.
* `CreatePaymentInstructionRequest` class was removed.
* `InstructionAwareInterface` moved to `Payum` namespace.
* `InstructionAwareInterface` renamed to `PaymentInstructionAwareInterface`
* `InstructionAwareInterface::setInstruction` renamed to `PaymentInstructionAwareInterface::setPaymentInstruction`
* `InstructionAggregateInterface` moved to `Payum` namespace.
* `InstructionAggregateInterface` renamed to `PaymentInstructionAggregateInterface`
* `InstructionAggregateInterface::getInstruction` renamed to `PaymentInstructionAggregateInterface::getPaymentInstruction`
* `SimpleSell` class was removed.
* Remove Model prefix from `Storages`.
* Change `Storages` namespace. It was `Payum\Domain\Storage\XXX` now `Payum\Storage\XXX`.
* [Authorize.Net AIM] `CaptureAction` now supports only `CaptureRequest` with the `PaymentInstruction` in it.
* [Authorize.Net AIM] `StatusAction` now supports only `StatusAction` with the `PaymentInstruction` in it.
* [Be2Bill] `CaptureAction` now supports only `CaptureRequest` with the `PaymentInstruction` in it.
* [Be2Bill] `StatusAction` now supports only `StatusAction` with the `PaymentInstruction` in it.
* [Paypal ExpressCheckout] `SyncRequest` was moved to core lib.