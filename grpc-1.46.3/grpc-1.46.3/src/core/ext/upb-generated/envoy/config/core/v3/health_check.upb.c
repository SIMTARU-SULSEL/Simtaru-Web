/* This file was generated by upbc (the upb compiler) from the input
 * file:
 *
 *     envoy/config/core/v3/health_check.proto
 *
 * Do not edit -- your changes will be discarded when the file is
 * regenerated. */

#include <stddef.h>
#include "upb/msg_internal.h"
#include "envoy/config/core/v3/health_check.upb.h"
#include "envoy/config/core/v3/base.upb.h"
#include "envoy/config/core/v3/event_service_config.upb.h"
#include "envoy/type/matcher/v3/string.upb.h"
#include "envoy/type/v3/http.upb.h"
#include "envoy/type/v3/range.upb.h"
#include "google/protobuf/any.upb.h"
#include "google/protobuf/duration.upb.h"
#include "google/protobuf/struct.upb.h"
#include "google/protobuf/wrappers.upb.h"
#include "udpa/annotations/status.upb.h"
#include "udpa/annotations/versioning.upb.h"
#include "validate/validate.upb.h"

#include "upb/port_def.inc"

static const upb_MiniTable_Field envoy_config_core_v3_HealthStatusSet__fields[1] = {
  {1, UPB_SIZE(0, 0), UPB_SIZE(0, 0), kUpb_NoSub, 5, kUpb_FieldMode_Array | kUpb_LabelFlags_IsPacked | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
};

const upb_MiniTable envoy_config_core_v3_HealthStatusSet_msginit = {
  NULL,
  &envoy_config_core_v3_HealthStatusSet__fields[0],
  UPB_SIZE(4, 8), 1, kUpb_ExtMode_NonExtendable, 1, 255, 0,
};

static const upb_MiniTable_Sub envoy_config_core_v3_HealthCheck_submsgs[20] = {
  {.submsg = &google_protobuf_Duration_msginit},
  {.submsg = &google_protobuf_Duration_msginit},
  {.submsg = &google_protobuf_Duration_msginit},
  {.submsg = &google_protobuf_UInt32Value_msginit},
  {.submsg = &google_protobuf_UInt32Value_msginit},
  {.submsg = &google_protobuf_UInt32Value_msginit},
  {.submsg = &google_protobuf_BoolValue_msginit},
  {.submsg = &envoy_config_core_v3_HealthCheck_HttpHealthCheck_msginit},
  {.submsg = &envoy_config_core_v3_HealthCheck_TcpHealthCheck_msginit},
  {.submsg = &envoy_config_core_v3_HealthCheck_GrpcHealthCheck_msginit},
  {.submsg = &google_protobuf_Duration_msginit},
  {.submsg = &envoy_config_core_v3_HealthCheck_CustomHealthCheck_msginit},
  {.submsg = &google_protobuf_Duration_msginit},
  {.submsg = &google_protobuf_Duration_msginit},
  {.submsg = &google_protobuf_Duration_msginit},
  {.submsg = &google_protobuf_Duration_msginit},
  {.submsg = &envoy_config_core_v3_HealthCheck_TlsOptions_msginit},
  {.submsg = &envoy_config_core_v3_EventServiceConfig_msginit},
  {.submsg = &google_protobuf_Struct_msginit},
  {.submsg = &google_protobuf_Duration_msginit},
};

static const upb_MiniTable_Field envoy_config_core_v3_HealthCheck__fields[23] = {
  {1, UPB_SIZE(16, 16), UPB_SIZE(1, 1), 0, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {2, UPB_SIZE(20, 24), UPB_SIZE(2, 2), 1, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {3, UPB_SIZE(24, 32), UPB_SIZE(3, 3), 2, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {4, UPB_SIZE(28, 40), UPB_SIZE(4, 4), 3, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {5, UPB_SIZE(32, 48), UPB_SIZE(5, 5), 4, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {6, UPB_SIZE(36, 56), UPB_SIZE(6, 6), 5, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {7, UPB_SIZE(40, 64), UPB_SIZE(7, 7), 6, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {8, UPB_SIZE(88, 160), UPB_SIZE(-5, -5), 7, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {9, UPB_SIZE(88, 160), UPB_SIZE(-5, -5), 8, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {11, UPB_SIZE(88, 160), UPB_SIZE(-5, -5), 9, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {12, UPB_SIZE(44, 72), UPB_SIZE(8, 8), 10, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {13, UPB_SIZE(88, 160), UPB_SIZE(-5, -5), 11, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {14, UPB_SIZE(48, 80), UPB_SIZE(9, 9), 12, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {15, UPB_SIZE(52, 88), UPB_SIZE(10, 10), 13, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {16, UPB_SIZE(56, 96), UPB_SIZE(11, 11), 14, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {17, UPB_SIZE(60, 104), UPB_SIZE(0, 0), kUpb_NoSub, 9, kUpb_FieldMode_Scalar | (kUpb_FieldRep_StringView << kUpb_FieldRep_Shift)},
  {18, UPB_SIZE(8, 8), UPB_SIZE(0, 0), kUpb_NoSub, 13, kUpb_FieldMode_Scalar | (kUpb_FieldRep_4Byte << kUpb_FieldRep_Shift)},
  {19, UPB_SIZE(12, 12), UPB_SIZE(0, 0), kUpb_NoSub, 8, kUpb_FieldMode_Scalar | (kUpb_FieldRep_1Byte << kUpb_FieldRep_Shift)},
  {20, UPB_SIZE(68, 120), UPB_SIZE(12, 12), 15, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {21, UPB_SIZE(72, 128), UPB_SIZE(13, 13), 16, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {22, UPB_SIZE(76, 136), UPB_SIZE(14, 14), 17, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {23, UPB_SIZE(80, 144), UPB_SIZE(15, 15), 18, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {24, UPB_SIZE(84, 152), UPB_SIZE(16, 16), 19, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
};

const upb_MiniTable envoy_config_core_v3_HealthCheck_msginit = {
  &envoy_config_core_v3_HealthCheck_submsgs[0],
  &envoy_config_core_v3_HealthCheck__fields[0],
  UPB_SIZE(92, 168), 23, kUpb_ExtMode_NonExtendable, 9, 255, 0,
};

static const upb_MiniTable_Field envoy_config_core_v3_HealthCheck_Payload__fields[2] = {
  {1, UPB_SIZE(4, 8), UPB_SIZE(-1, -1), kUpb_NoSub, 9, kUpb_FieldMode_Scalar | (kUpb_FieldRep_StringView << kUpb_FieldRep_Shift)},
  {2, UPB_SIZE(4, 8), UPB_SIZE(-1, -1), kUpb_NoSub, 12, kUpb_FieldMode_Scalar | (kUpb_FieldRep_StringView << kUpb_FieldRep_Shift)},
};

const upb_MiniTable envoy_config_core_v3_HealthCheck_Payload_msginit = {
  NULL,
  &envoy_config_core_v3_HealthCheck_Payload__fields[0],
  UPB_SIZE(12, 24), 2, kUpb_ExtMode_NonExtendable, 2, 255, 0,
};

static const upb_MiniTable_Sub envoy_config_core_v3_HealthCheck_HttpHealthCheck_submsgs[6] = {
  {.submsg = &envoy_config_core_v3_HealthCheck_Payload_msginit},
  {.submsg = &envoy_config_core_v3_HealthCheck_Payload_msginit},
  {.submsg = &envoy_config_core_v3_HeaderValueOption_msginit},
  {.submsg = &envoy_type_v3_Int64Range_msginit},
  {.submsg = &envoy_type_matcher_v3_StringMatcher_msginit},
  {.submsg = &envoy_type_v3_Int64Range_msginit},
};

static const upb_MiniTable_Field envoy_config_core_v3_HealthCheck_HttpHealthCheck__fields[10] = {
  {1, UPB_SIZE(8, 8), UPB_SIZE(0, 0), kUpb_NoSub, 9, kUpb_FieldMode_Scalar | (kUpb_FieldRep_StringView << kUpb_FieldRep_Shift)},
  {2, UPB_SIZE(16, 24), UPB_SIZE(0, 0), kUpb_NoSub, 9, kUpb_FieldMode_Scalar | (kUpb_FieldRep_StringView << kUpb_FieldRep_Shift)},
  {3, UPB_SIZE(24, 40), UPB_SIZE(1, 1), 0, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {4, UPB_SIZE(28, 48), UPB_SIZE(2, 2), 1, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {6, UPB_SIZE(32, 56), UPB_SIZE(0, 0), 2, 11, kUpb_FieldMode_Array | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {8, UPB_SIZE(36, 64), UPB_SIZE(0, 0), kUpb_NoSub, 9, kUpb_FieldMode_Array | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {9, UPB_SIZE(40, 72), UPB_SIZE(0, 0), 3, 11, kUpb_FieldMode_Array | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {10, UPB_SIZE(4, 4), UPB_SIZE(0, 0), kUpb_NoSub, 5, kUpb_FieldMode_Scalar | (kUpb_FieldRep_4Byte << kUpb_FieldRep_Shift)},
  {11, UPB_SIZE(44, 80), UPB_SIZE(3, 3), 4, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {12, UPB_SIZE(48, 88), UPB_SIZE(0, 0), 5, 11, kUpb_FieldMode_Array | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
};

const upb_MiniTable envoy_config_core_v3_HealthCheck_HttpHealthCheck_msginit = {
  &envoy_config_core_v3_HealthCheck_HttpHealthCheck_submsgs[0],
  &envoy_config_core_v3_HealthCheck_HttpHealthCheck__fields[0],
  UPB_SIZE(52, 104), 10, kUpb_ExtMode_NonExtendable, 4, 255, 0,
};

static const upb_MiniTable_Sub envoy_config_core_v3_HealthCheck_TcpHealthCheck_submsgs[2] = {
  {.submsg = &envoy_config_core_v3_HealthCheck_Payload_msginit},
  {.submsg = &envoy_config_core_v3_HealthCheck_Payload_msginit},
};

static const upb_MiniTable_Field envoy_config_core_v3_HealthCheck_TcpHealthCheck__fields[2] = {
  {1, UPB_SIZE(4, 8), UPB_SIZE(1, 1), 0, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
  {2, UPB_SIZE(8, 16), UPB_SIZE(0, 0), 1, 11, kUpb_FieldMode_Array | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
};

const upb_MiniTable envoy_config_core_v3_HealthCheck_TcpHealthCheck_msginit = {
  &envoy_config_core_v3_HealthCheck_TcpHealthCheck_submsgs[0],
  &envoy_config_core_v3_HealthCheck_TcpHealthCheck__fields[0],
  UPB_SIZE(12, 24), 2, kUpb_ExtMode_NonExtendable, 2, 255, 0,
};

static const upb_MiniTable_Field envoy_config_core_v3_HealthCheck_RedisHealthCheck__fields[1] = {
  {1, UPB_SIZE(0, 0), UPB_SIZE(0, 0), kUpb_NoSub, 9, kUpb_FieldMode_Scalar | (kUpb_FieldRep_StringView << kUpb_FieldRep_Shift)},
};

const upb_MiniTable envoy_config_core_v3_HealthCheck_RedisHealthCheck_msginit = {
  NULL,
  &envoy_config_core_v3_HealthCheck_RedisHealthCheck__fields[0],
  UPB_SIZE(8, 24), 1, kUpb_ExtMode_NonExtendable, 1, 255, 0,
};

static const upb_MiniTable_Sub envoy_config_core_v3_HealthCheck_GrpcHealthCheck_submsgs[1] = {
  {.submsg = &envoy_config_core_v3_HeaderValueOption_msginit},
};

static const upb_MiniTable_Field envoy_config_core_v3_HealthCheck_GrpcHealthCheck__fields[3] = {
  {1, UPB_SIZE(0, 0), UPB_SIZE(0, 0), kUpb_NoSub, 9, kUpb_FieldMode_Scalar | (kUpb_FieldRep_StringView << kUpb_FieldRep_Shift)},
  {2, UPB_SIZE(8, 16), UPB_SIZE(0, 0), kUpb_NoSub, 9, kUpb_FieldMode_Scalar | (kUpb_FieldRep_StringView << kUpb_FieldRep_Shift)},
  {3, UPB_SIZE(16, 32), UPB_SIZE(0, 0), 0, 11, kUpb_FieldMode_Array | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
};

const upb_MiniTable envoy_config_core_v3_HealthCheck_GrpcHealthCheck_msginit = {
  &envoy_config_core_v3_HealthCheck_GrpcHealthCheck_submsgs[0],
  &envoy_config_core_v3_HealthCheck_GrpcHealthCheck__fields[0],
  UPB_SIZE(20, 40), 3, kUpb_ExtMode_NonExtendable, 3, 255, 0,
};

static const upb_MiniTable_Sub envoy_config_core_v3_HealthCheck_CustomHealthCheck_submsgs[1] = {
  {.submsg = &google_protobuf_Any_msginit},
};

static const upb_MiniTable_Field envoy_config_core_v3_HealthCheck_CustomHealthCheck__fields[2] = {
  {1, UPB_SIZE(4, 8), UPB_SIZE(0, 0), kUpb_NoSub, 9, kUpb_FieldMode_Scalar | (kUpb_FieldRep_StringView << kUpb_FieldRep_Shift)},
  {3, UPB_SIZE(12, 24), UPB_SIZE(-1, -1), 0, 11, kUpb_FieldMode_Scalar | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
};

const upb_MiniTable envoy_config_core_v3_HealthCheck_CustomHealthCheck_msginit = {
  &envoy_config_core_v3_HealthCheck_CustomHealthCheck_submsgs[0],
  &envoy_config_core_v3_HealthCheck_CustomHealthCheck__fields[0],
  UPB_SIZE(16, 40), 2, kUpb_ExtMode_NonExtendable, 1, 255, 0,
};

static const upb_MiniTable_Field envoy_config_core_v3_HealthCheck_TlsOptions__fields[1] = {
  {1, UPB_SIZE(0, 0), UPB_SIZE(0, 0), kUpb_NoSub, 9, kUpb_FieldMode_Array | (kUpb_FieldRep_Pointer << kUpb_FieldRep_Shift)},
};

const upb_MiniTable envoy_config_core_v3_HealthCheck_TlsOptions_msginit = {
  NULL,
  &envoy_config_core_v3_HealthCheck_TlsOptions__fields[0],
  UPB_SIZE(4, 8), 1, kUpb_ExtMode_NonExtendable, 1, 255, 0,
};

static const upb_MiniTable *messages_layout[9] = {
  &envoy_config_core_v3_HealthStatusSet_msginit,
  &envoy_config_core_v3_HealthCheck_msginit,
  &envoy_config_core_v3_HealthCheck_Payload_msginit,
  &envoy_config_core_v3_HealthCheck_HttpHealthCheck_msginit,
  &envoy_config_core_v3_HealthCheck_TcpHealthCheck_msginit,
  &envoy_config_core_v3_HealthCheck_RedisHealthCheck_msginit,
  &envoy_config_core_v3_HealthCheck_GrpcHealthCheck_msginit,
  &envoy_config_core_v3_HealthCheck_CustomHealthCheck_msginit,
  &envoy_config_core_v3_HealthCheck_TlsOptions_msginit,
};

const upb_MiniTable_File envoy_config_core_v3_health_check_proto_upb_file_layout = {
  messages_layout,
  NULL,
  NULL,
  9,
  0,
  0,
};

#include "upb/port_undef.inc"

